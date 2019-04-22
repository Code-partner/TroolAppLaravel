<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //
    public function sku(){
        return $this->belongsTo('App\SKU','s_k_u_id','id');
    }

}
