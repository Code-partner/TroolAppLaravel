<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable =[
        'name','short_desc','description','product_img','images','sku_code'
    ];

    protected $guarded =[
        'price'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function sizes(){
        return $this->belongsToMany('App\Size');
    }
    public function colors(){
        return $this->belongsToMany('App\Color');
    }
    public function skus(){
        return $this->hasMany('App\SKU');
    }
    public function carts(){
        return $this->hasMany('App\Cart');
    }
}
