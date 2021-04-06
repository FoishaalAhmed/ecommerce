<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;

class Product extends Model
{
    protected $fillable = [
        'name', 'slug', 'current_price', 'previous_price', 'saving', 'quantity', 'description', 'cover',
    ];

    public function getMenProducts()
    {
        $products = DB::table('products')
                        ->join('product_categories', 'products.id', '=', 'product_categories.product_id')
                        ->where('product_categories.category_id', 1)
                        ->orderBy('products.created_at', 'desc')
                        ->groupBy('products.id')
                        ->take(12)
                        ->select('products.slug', 'products.id', 'products.cover', 'products.name', 'products.current_price')
                        ->get()
                        ->toArray();
        return $products;
    }

    public function getKidProducts()
    {
        $products = DB::table('products')
                        ->join('product_categories', 'products.id', '=', 'product_categories.product_id')
                        ->where('product_categories.category_id', 6)
                        ->orderBy('products.created_at', 'desc')
                        ->groupBy('products.id')
                        ->take(12)
                        ->select('products.slug', 'products.id', 'products.cover', 'products.name', 'products.current_price')
                        ->get()
                        ->toArray();
        return $products;
    }

    public function getWomenProducts()
    {
        $products = DB::table('products')
                        ->join('product_categories', 'products.id', '=', 'product_categories.product_id')
                        ->where('product_categories.category_id', 2)
                        ->orderBy('products.created_at', 'desc')
                        ->groupBy('products.id')
                        ->take(12)
                        ->select('products.slug', 'products.id', 'products.cover', 'products.name', 'products.current_price')
                        ->get()
                        ->toArray();
        return $products;
    }

    public function getMugProducts()
    {
        $products = DB::table('products')
                        ->join('product_categories', 'products.id', '=', 'product_categories.product_id')
                        ->where('product_categories.category_id', 7)
                        ->orderBy('products.created_at', 'desc')
                        ->groupBy('products.id')
                        ->take(6)
                        ->select('products.slug', 'products.id', 'products.cover', 'products.name', 'products.current_price')
                        ->get()
                        ->toArray();
        return $products;
    }

    public function getMobileCoverProducts()
    {
        $products = DB::table('products')
                        ->join('product_categories', 'products.id', '=', 'product_categories.product_id')
                        ->where('product_categories.category_id', 8)
                        ->orderBy('products.created_at', 'desc')
                        ->groupBy('products.id')
                        ->groupBy('products.id')
                        ->take(6)
                        ->select('products.slug', 'products.id', 'products.cover', 'products.name', 'products.current_price')
                        ->get()
                        ->toArray();
        return $products;
    }

    public function getProductByCategory($category_id)
    {
        $products = DB::table('products')
                        ->join('product_categories', 'products.id', '=', 'product_categories.product_id')
                        ->leftJoin('product_photos', 'products.id', '=', 'product_photos.product_id')
                        ->where('product_categories.category_id', $category_id)
                        ->orderBy('products.created_at', 'desc')
                        ->groupBy('products.id')
                        ->select('products.slug', 'products.id', 'products.cover', 'products.name', 'products.current_price', 'products.previous_price', 'products.saving', 'product_photos.photo')
                        ->paginate(24);
        return $products;
    }

    public function getRelatedProducts($categories, $product_id)
    {
        $products = DB::table('products')
                        ->join('product_categories', 'products.id', '=', 'product_categories.product_id')
                        ->leftJoin('product_photos', 'products.id', '=', 'product_photos.product_id')
                        ->where('products.id', '!=', $product_id)
                        ->whereIn('product_categories.category_id', $categories)
                        ->orderBy('products.created_at', 'desc')
                        ->groupBy('products.id')
                        ->take(12)
                        ->select('products.slug', 'products.id', 'products.cover', 'products.name', 'products.current_price', 'products.previous_price', 'products.saving', 'product_photos.photo')
                        ->get();
        return $products;
    }

    public function getAllProduct()
    {
        $products = DB::table('products')
                        ->leftJoin('product_photos', 'products.id', '=', 'product_photos.product_id')
                        ->orderBy('products.created_at', 'desc')
                        ->select('products.slug', 'products.id', 'products.cover', 'products.name', 'products.current_price', 'products.previous_price','products.saving', 'product_photos.photo')
                        ->paginate(24);
        return $products;
    }

    public function storeProduct(Object $request)
    {
        $image = $request->file('cover');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/products/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->cover     = $image_url;
        }

        $this->name           = $request->name;
        $this->slug           = $request->slug;
        $this->current_price  = $request->current_price;
        $this->previous_price = $request->previous_price;
        $this->saving         = $request->saving;
        $this->quantity       = $request->quantity;
        $this->description    = $request->description;
        $storeProduct         = $this->save();
        $product_id           = $this->id;

        foreach ($request->categories as $key => $value) {

            $productCategory = new ProductCategory();
            $productCategory->category_id = $value;
            $productCategory->product_id = $product_id;
            $productCategory->save();
        }

        if ($request->sizes != null) {
            foreach ($request->sizes as $key => $value) {

                $productSize = new ProductSize();
                $productSize->size_id = $value;
                $productSize->product_id = $product_id;
                $productSize->save();
            }
        }

        if ($request->colors != null) {

            foreach ($request->colors as $key => $value) {

                $productColor = new ProductColor();
                $productColor->color_id = $value;
                $productColor->product_id = $product_id;
                $productColor->save();
            }
        }

        if ($files = $request->file('photo')) {

            foreach ($files as $file) {

                $multiple_upload_path = 'public/images/products/';
                $name                 = $file->getClientOriginalName();
                $multiple_image_name  = date('YmdHis') . '_' . $name;
                $file->move($multiple_upload_path, $multiple_image_name);

                $productPhoto             = new ProductPhoto();
                $productPhoto->photo      = $multiple_upload_path . $multiple_image_name;
                $productPhoto->product_id = $product_id;
                $productPhoto->save();
            }
        }

        $storeProduct ? 
        Session::flash('message', 'Product Saved Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
    }

    public function updateProduct(Object $request, Int $id)
    {
        $product = $this::findOrFail($id);
        $image = $request->file('cover');

        if ($image) {

            if (file_exists($product->cover)) unlink($product->cover);

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/products/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $product->cover     = $image_url;
        }

        $product->name           = $request->name;
        $product->slug           = $request->slug;
        $product->current_price  = $request->current_price;
        $product->previous_price = $request->previous_price;
        $product->saving         = $request->saving;
        $product->quantity       = $request->quantity;
        $product->description    = $request->description;
        $updateProduct           = $product->save();
        $product_id              = $id;


        ProductCategory::where('product_id', $id)->delete();
        foreach ($request->categories as $key => $value) {

            $productCategory = new ProductCategory();
            $productCategory->category_id = $value;
            $productCategory->product_id = $product_id;
            $productCategory->save();
        }

        if ($request->sizes != null) {

            ProductSize::where('product_id', $id)->delete();

            foreach ($request->sizes as $key => $value) {

                $productSize = new ProductSize();
                $productSize->size_id = $value;
                $productSize->product_id = $product_id;
                $productSize->save();
            }

        } else {

            ProductSize::where('product_id', $id)->delete();
        }

        if ($request->colors != null) {

            ProductColor::where('product_id', $id)->delete();

            foreach ($request->colors as $key => $value) {

                $productColor = new ProductColor();
                $productColor->color_id = $value;
                $productColor->product_id = $product_id;
                $productColor->save();
            }
        } else {

            ProductColor::where('product_id', $id)->delete();
        }

        if ($files = $request->file('photo')) {

            foreach ($files as $file) {

                $multiple_upload_path = 'public/images/products/';
                $name                 = $file->getClientOriginalName();
                $multiple_image_name  = date('YmdHis') . '_' . $name;
                $file->move($multiple_upload_path, $multiple_image_name);

                $productPhoto             = new ProductPhoto;
                $productPhoto->photo      = $multiple_upload_path . $multiple_image_name;
                $productPhoto->product_id = $product_id;
                $productPhoto->save();
            }
        }

        $updateProduct ? 
        Session::flash('message', 'Product Updated Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyProduct(Int $id)
    {
        $product = $this::findOrFail($id);

        if (file_exists($product->cover)) unlink($product->cover);

        $product_photos = ProductPhoto::where('product_id', $id)->select('photo')->get();

        if ($product_photos) {

            foreach ($$product_photos as $key => $value) {

                if (file_exists($value->photo)) unlink($value->photo);
            }
        }

        ProductPhoto::where('product_id', $id)->delete();
        $destroyProduct = $product->delete();

        $destroyProduct ?
        Session::flash('message', 'Product Deleted Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
    }
}
