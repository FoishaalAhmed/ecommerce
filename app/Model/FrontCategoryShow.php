<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;
use DB;

class FrontCategoryShow extends Model
{
    protected $fillable = [
        'category_id', 'title', 'photo', 'type', 'background',
    ];

    public function getFrontCategoryShow($limit = null, $type = null)
    {
        $query = DB::table('front_category_shows')
                          ->join('categories', 'front_category_shows.category_id', '=', 'categories.id')
                          ->select('front_category_shows.*', 'categories.name')
                          ->oldest();
        if($type != null) $query->where('front_category_shows.type', $type);
        if($limit != null) $query->take($limit);
        $categories = $query->get();
        return $categories;
    }

    public function storeCategoryShow(Object $request)
    {
        //product image
        $image = $request->file('photo');
        $image_name      = date('YmdHis');
        $ext             = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path     = 'public/images/categoryShows/';
        $image_url       = $upload_path . $image_full_name;
        $success         = $image->move($upload_path, $image_full_name);
        $this->photo     = $image_url;

        $background = $request->file('background');

        if ($background) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($background->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/categoryShows/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $background->move($upload_path, $image_full_name);
            $this->background = $image_url;

        }

        $this->category_id = $request->category_id;
        $this->title       = $request->title;
        $this->type        = $request->type;
        $storeCategoryShow = $this->save();

        $storeCategoryShow ?
            Session::flash('message', 'Category Show Save Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function updateCategoryShow(Object $request, Int $id)
    {
        $categoryShow = $this::findOrFail($id);

        $image  = $request->file('photo');

        if ($image) {

            if (file_exists($categoryShow->photo)) unlink($categoryShow->photo);

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/categoryShows/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $categoryShow->photo   = $image_url;
        }

        if ($request->type != 2) {

            if (file_exists($categoryShow->background)) unlink($categoryShow->background);
            $categoryShow->background = NULL;

        } else{

            $background  = $request->file('background');

            if ($background) {

                if (file_exists($categoryShow->background)) unlink($categoryShow->background);

                $image_name      = date('YmdHis');
                $ext             = strtolower($background->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path     = 'public/images/categoryShows/';
                $image_url       = $upload_path . $image_full_name;
                $success         = $background->move($upload_path, $image_full_name);
                $categoryShow->background = $image_url;
            }
        }

        $categoryShow->category_id = $request->category_id;
        $categoryShow->title       = $request->title;
        $categoryShow->type        = $request->type;
        $updateCategoryShow        = $categoryShow->save();

        $updateCategoryShow ?
            Session::flash('message', 'Category Show Updated Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyCategoryShow(Int $id)
    {
        $categoryShow = $this::findOrFail($id);
        if (file_exists($categoryShow->photo)) unlink($categoryShow->photo);
        if (file_exists($categoryShow->background)) unlink($categoryShow->background);
        $destroyCategoryShow = $categoryShow->delete();

        $destroyCategoryShow ?
            Session::flash('message', 'Category Show Deleted Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }
}
