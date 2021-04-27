<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;

class Slider extends Model
{
    protected $fillable = [
        'intro', 'product_name', 'short_description', 'coupon', 'photo', 'background', 'link',  
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

        $this->intro             = $request->intro;
        $this->product_name      = $request->product_name;
        $this->short_description = $request->short_description;
        $this->coupon            = $request->coupon;
        $this->link              = $request->link;
        $storeSlider             = $this->save();

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

        $slider->intro             = $request->intro;
        $slider->product_name      = $request->product_name;
        $slider->short_description = $request->short_description;
        $slider->coupon            = $request->coupon;
        $slider->link              = $request->link;
        $storeSlider               = $slider->save();
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
