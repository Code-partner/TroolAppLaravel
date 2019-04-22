<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SKU extends Model
{
    //
    public function inventory(){
        return $this->hasOne('App\Inventory');
    }
    public function product(){
        return $this->belongsTo('App\Product');
    }
    public function color(){
        return $this->belongsTo('App\Color');
    }
    public function size(){
        return $this->belongsTo('App\Size');
    }
    public function carts(){
        return $this->hasMany('App\Cart','id','sku_id');
    }
}
