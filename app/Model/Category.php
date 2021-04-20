<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;

class Category extends Model
{
    protected $fillable = [
        'name', 'parent_id',
    ];

    public static $validateRule = [

        'name'      => 'required|string|max: 255',
        'parent_id' => 'required|numeric',
    ];

    public function products()
    {
        return $this->belongsToMany('App\Model\Product');
    }

    public function getAllCategoryWithParent()
    {
        $categories = DB::table('categories')
                        ->leftJoin('categories as parent', 'categories.parent_id', '=', 'parent.id')
                          ->select('categories.*', 'parent.name as parent_name')
                          ->orderBy('categories.name', 'asc')
                          ->get();
        return $categories;
                             
    }

    public function storeCategory(Object $request)
    {
        $this->name      = $request->name;
        $this->parent_id = $request->parent_id;
        $storeCategory   = $this->save();

        $storeCategory ?
        Session::flash('message', 'Category Created Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
    }

    public function updateCategory(Object $request, Int $id)
    {
        $category = $this::findOrFail($id);
        $category->name      = $request->name;
        $category->parent_id = $request->parent_id;
        $updateCategory      = $category->save();

        $updateCategory ?
        Session::flash('message', 'Category Updated Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyCategory(Int $id)
    {
        $category = $this::findOrFail($id);
        $deleteCategory = $category->delete();

        $deleteCategory ?
        Session::flash('message', 'Category Deleted Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
    }
}
