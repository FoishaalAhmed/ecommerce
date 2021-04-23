<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;

class Product extends Model
{
    protected $fillable = [
        'name', 'slug', 'current_price', 'previous_price', 'saving', 'quantity', 'description', 'cover', 'tags', 
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Model\Category');
    }

    public function getProductByCategory($category_id)
    {
        $products = DB::table('products')
                        ->join('category_product', 'products.id', '=', 'category_product.product_id')
                        ->leftJoin('product_photos', 'products.id', '=', 'product_photos.product_id')
                        ->where('category_product.category_id', $category_id)
                        ->orderBy('products.created_at', 'desc')
                        ->groupBy('products.id')
                        ->select('products.slug', 'products.id', 'products.cover', 'products.name', 'products.current_price', 'products.previous_price', 'products.saving', 'product_photos.photo')
                        ->paginate(20);
        return $products;
    }

    public function getRelatedProducts($categories, $product_id)
    {
        $products = DB::table('products')
                        ->join('category_product', 'products.id', '=', 'category_product.product_id')
                        ->leftJoin('product_photos', 'products.id', '=', 'product_photos.product_id')
                        ->where('products.id', '!=', $product_id)
                        ->whereIn('category_product.category_id', $categories)
                        ->orderBy('products.created_at', 'desc')
                        ->groupBy('products.id')
                        ->take(12)
                        ->select('products.slug', 'products.id', 'products.cover', 'products.name', 'products.current_price', 'products.previous_price', 'products.saving', 'product_photos.photo')
                        ->get();
        return $products;
    }

    public function getFilteredProducts($categories = null, $priceStart, $priceEnd)
    {
        $query = DB::table('products')
                        ->join('category_product', 'products.id', '=', 'category_product.product_id')
                        ->leftJoin('product_photos', 'products.id', '=', 'product_photos.product_id');

        if ($categories != null) $query->whereIn('category_product.category_id', $categories);

        $query->whereBetween('products.current_price', [$priceStart, $priceEnd])
                        ->orderBy('products.created_at', 'desc')
                        ->groupBy('products.id')
                        ->select('products.slug', 'products.id', 'products.cover', 'products.name', 'products.current_price', 'products.previous_price', 'products.saving', 'product_photos.photo');
        $products = $query->get();

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
        $this->tags           = $request->tags;
        $storeProduct         = $this->save();
        $product_id           = $this->id;

        foreach ($request->categories as $key => $value) {

            $productCategory = new CategoryProduct();
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

                $productColor = new ColorProduct();
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
            $product->cover  = $image_url;
        }

        $product->name           = $request->name;
        $product->slug           = $request->slug;
        $product->current_price  = $request->current_price;
        $product->previous_price = $request->previous_price;
        $product->saving         = $request->saving;
        $product->quantity       = $request->quantity;
        $product->description    = $request->description;
        $product->tags           = $request->tags;
        $updateProduct           = $product->save();
        $product_id              = $id;


        CategoryProduct::where('product_id', $id)->delete();

        foreach ($request->categories as $key => $value) {

            $productCategory = new CategoryProduct();
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

            ColorProduct::where('product_id', $id)->delete();

            foreach ($request->colors as $key => $value) {

                $productColor = new ColorProduct();
                $productColor->color_id = $value;
                $productColor->product_id = $product_id;
                $productColor->save();
            }

        } else {

            ColorProduct::where('product_id', $id)->delete();
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
