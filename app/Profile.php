<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        'name','mob_no','bill_address','ship_address'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
