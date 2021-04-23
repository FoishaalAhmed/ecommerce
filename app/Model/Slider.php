<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;

class Slider extends Model
{
    protected $fillable = [
        'text', 'photo', 'link', 
    ];

    public function storeSlider(Object $request)
    {
        //product image
        $image = $request->file('photo');
        $image_name      = date('YmdHis');
        $ext             = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path     = 'public/images/sliders/';
        $image_url       = $upload_path . $image_full_name;
        $success         = $image->move($upload_path, $image_full_name);
        $this->photo     = $image_url;

        $background = $request->file('background');

        $image_name      = date('YmdHis');
        $ext             = strtolower($background->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path     = 'public/images/sliders/';
        $image_url       = $upload_path . $image_full_name;
        $success         = $background->move($upload_path, $image_full_name);
        $this->background= $image_url;

        $this->text  = $request->text;
        $this->link  = $request->link;
        $storeSlider = $this->save();

        $storeSlider ?
            Session::flash('message', 'Slider Save Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function updateSlider(Object $request, Int $id)
    {
        $slider = $this::findOrFail($id);

        $image  = $request->file('photo');

        if ($image) {

            if (file_exists($slider->photo)) unlink($slider->photo);

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/sliders/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $slider->photo   = $image_url;
        }

        $background  = $request->file('background');

        if ($background) {

            if (file_exists($slider->background)) unlink($slider->background);

            $image_name      = date('YmdHis');
            $ext             = strtolower($background->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/sliders/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $background->move($upload_path, $image_full_name);
            $slider->background = $image_url;
        }

        $slider->text  = $request->text;
        $slider->link  = $request->link;
        $updateSlider  = $slider->save();

        $updateSlider ?
            Session::flash('message', 'Slider Updated Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function destroySlider(Int $id)
    {
        $slider = $this::findOrFail($id);
        if (file_exists($slider->photo)) unlink($slider->photo);
        if (file_exists($slider->background)) unlink($slider->background);
        $destroySlider = $slider->delete();

        $destroySlider ?
            Session::flash('message', 'Slider Deleted Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }
}
