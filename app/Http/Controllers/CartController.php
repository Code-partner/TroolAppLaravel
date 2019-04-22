<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $carts = auth()->user()->carts;
        return view('cart',compact('carts'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'product'=>'required',
            'sc'=>'required',
            'quantity'=>'required'
        ]);
        $cart =new Cart();
        $cart->user_id = auth()->user()->id;
        $input=$request->all();
        $cart->product_id = $input['product'];
        $cart->sku_id = Product::find($input['product'])->skus()->whereSizeId($input['sc'])->first()->id;
        $cart->qty =$input['quantity'];
        $cart->save();
        return redirect('/cart');
    }
}
