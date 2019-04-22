<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id){
        $category = Category::whereName($id)->first();
        $products=$category->products;

//        dd($products);
        return view('category',compact('products'));
    }
}
