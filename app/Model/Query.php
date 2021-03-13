<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'subject', 'message',
    ];

    public function storeQuery(Object $request)
    {
        $this->name    = $request->name;
        $this->email   = $request->email;
        $this->phone   = $request->phone;
        $this->subject = $request->subject;
        $this->message = $request->message;
        $this->save();
    }
}
