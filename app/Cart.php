<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public function product(){
        return $this->belongsTo('App\Product');
    }
    public function sku(){
        return $this->belongsTo('App\SKU','sku_id','id');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
