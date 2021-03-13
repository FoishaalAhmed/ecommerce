<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Session;

class Team extends Model
{
    protected $fillable = [
        'name', 'position', 'facebook', 'twitter', 'linkedin', 'instagram', 'photo', 'priority',
    ];

    public function storeTeam(Object $request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/teams/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->name       = $request->name;
        $this->position   = $request->position;
        $this->facebook   = $request->facebook;
        $this->twitter    = $request->twitter;
        $this->linkedin   = $request->linkedin;
        $this->instagram  = $request->instagram;
        $this->priority   = $request->priority;
        $storeTeam        = $this->save();

        $storeTeam ?
            Session::flash('message', 'New Team Created Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function updateTeam(Object $request, Int $id)
    {
        $team = $this::findOrFail($id);
        $image = $request->file('photo');

        if ($image) {
            if (file_exists($team->photo)) unlink($team->photo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/teams/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $team->photo     = $image_url;
        }

        $team->name       = $request->name;
        $team->position   = $request->position;
        $team->facebook   = $request->facebook;
        $team->twitter    = $request->twitter;
        $team->linkedin   = $request->linkedin;
        $team->instagram  = $request->instagram;
        $team->priority   = $request->priority;
        $updateTeam       = $team->save();

        $updateTeam ?
            Session::flash('message', 'Team Updated Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }

    public function destroyTeam(Int $id)
    {
        $team = $this::findOrFail($id);
        if (file_exists($team->photo)) unlink($team->photo);

        $deleteTeam = $team->delete();

        $deleteTeam ?
            Session::flash('message', 'Team Deleted Successfully!') :
            Session::flash('message', 'Something Went Wrong!');
    }
}
