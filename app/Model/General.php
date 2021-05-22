<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;

class General extends Model
{
    protected $fillable = [

        'name', 'value',
    ];

    public static $validateRule = [
        'name'  => 'required|string|max:255',
        'value' => 'required|string'
    ];

    public function storeGeneral(Object $request)
    {
        $this->name  = $request->name;
        $this->value = $request->value;

        $storeGeneral = $this->save();

        $storeGeneral ?
        Session::flash('message', 'General Saved Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
    }

    public function updateGeneral(Object $request, Int $id)
    {
        $general = $this::findOrFail($id);
        $general->value = $request->value;

        $updateGeneral = $general->save();

        $updateGeneral ?
        Session::flash('message', 'General Updated Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyGeneral(Int $id)
    {
        $general = $this::findOrFail($id);

        $destroyGeneral = $general->delete();

        $destroyGeneral ?
        Session::flash('message', 'General Deleted Successfully!') :
        Session::flash('message', 'Something Went Wrong!');
    }
}
