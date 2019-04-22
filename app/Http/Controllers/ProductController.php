<?php

namespace App\Http\Controllers;

use App\Category;
use App\Color;
use App\Inventory;
use App\Product;
use App\Size;
use App\SKU;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use function MongoDB\BSON\toJSON;

class ProductController extends Controller
{
    private $hostname = "http://127.0.0.1:8000";
    public function index(){
        $products =Product::all();
        return view('admin.allProduct',compact('products'));
    }
    public function create(){
        $categories = Category::all();
        $colors=Color::all();
        $sizes=Size::all();
        return view('admin.createProduct',compact('categories','colors','sizes'));
    }

    /**
     * Stores Data get from a post request
     * @param Request $request
     */
    public function store(Request $request){
//        dd($request);

        $this->validate($request,[
            'p_name'=>'required',
            'category' => 'required',
            'actual_price' => 'required',
            'selling_price' => 'required',
            'short_desc' => 'required | max: 100',
            'long_desc' => 'required',
            'p_img' => 'image|required',
            'back_sc' => 'image|required',
            'size'=>'required',
            'color' => 'required',
        ]);

        /*  Making a unique Slug for Product */
        $slug = $this->makeSlug();

        /* Making an array called input from $request variable */
        $input=$request->all();

        /* Setting a path for file Storage*/
        $path='img/product';
        $filepath='public/'.$path;

        /* Setting custom file names */
        $p_file = $request->p_img;
        $filename=$slug."-pi.".$p_file->extension();

        $back_file = $request->back_sc;
        $back_filename=$slug."-back.".$p_file->extension();

        /* Storing files */
        $p_file->storeAs($filepath,$filename);
        $back_file->storeAs($filepath,$back_filename);

        /* Generating SKU code*/

        $product=new Product();
        $product->name = $input['p_name'];
        $product->category_id = $input['category'];
        $product->slug = $slug;
        $product->price =$input['selling_price'];
        $product->actual_price=$input['actual_price'];
        $product->short_desc =$input['short_desc'];
        $product->description =$input['long_desc'];
        $product->product_img =$this->hostname."/storage/".$path."/".$filename;
        $product->back_img =$this->hostname.'/storage/'.$path.'/'.$back_filename;
        $product->save();

        $this->SKU_Gen($input['size'],$input['color'],$product);
        $this->attachSizes($input['size'],$product->id);
        $color = Color::find($input['color']);
        $product->colors()->attach($color);
//        $product->sizes()->attach($this->getSizes($input['size']));

        return redirect('/admin/product');

    }
    public function show($slug){
        $product = Product::whereSlug($slug)->first();
        $status=[];
        $skus =$product->skus;
        for($i=0;$i<count($skus);$i++){
            $status[$i] = $this->status($skus[$i]->inventory);
        }
        $status=response()->json($status);
//        $sizes = $product->sizes;
        $colors=$product->colors;
//        dd($color);
        return view('product',compact('product','colors'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        $colors=Color::all();
        $sizes=Size::all();
        return view('admin.edit_product',compact('product','categories','colors','sizes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        $product->skus()->delete();
        foreach($product->skus as $sku){
            $sku->inventory->delete();
        }
        return back();
    }

    public function status(Inventory $inventory){
        if($inventory->quantity >= 10){
            return array([$inventory->sku->size->name => 'Available In Stock']);
        }elseif ($inventory->quantity >= 5){
            return array([$inventory->sku->size->name => 'Few Left In Stock']);
        }elseif($inventory->quantity>0){
            return array([$inventory->sku->size->name => 'Only '.$inventory->quantity.' Left']);
        }else{
            return array([$inventory->sku->size->name => 'Out of stock']);
        }
    }

    /**
     * To generate a random Unique Slug
     * @return string
     */
    public function makeSlug(){
        while(true){
            $slug = Str::random(20);
            if($this->isUnique($slug)){
                return $slug;
                break;
            }
        }

    }

    /**
     * Checks if slug is Unique or not
     * @param $slug
     * @return bool
     */
    public function isUnique($slug){
        $products = Product::all();

        foreach ($products as $product){
            if($product->slug ==$slug){
                return false;
            }
        }
        return true;
    }

    /**
     * Generates Products Unique SKU Code
     * @param $sizes
     * @param $color_id
     * @param $product
     * @return null
     */
    public function SKU_Gen($sizes, $color_id,$product){
        $color =Color::find($color_id);

       foreach ($sizes as $size_id){
           $size=Size::find($size_id);
           $sku_id = $product->id.'-'.strtoupper($color->name).'-'.strtoupper($size->name);
           $sku = new SKU();
           $sku->color_id =$color_id;
           $sku->size_id =$size_id;
           $sku->sku =$sku_id;
           $sku=$product->skus()->save($sku);
           $inventory = new Inventory();
           $inventory->quantity = 1;
           $inventory->cost=1;
           $sku->inventory()->save($inventory);
       }

    }
    public function attachSizes($size,$id){
        $n = count($size);
        $product = Product::find($id);
        for($i=0;$i<$n;$i++){
            $size_inst = Size::find($size[$i]);
            $product->sizes()->attach($size_inst);
        }
    }
}


