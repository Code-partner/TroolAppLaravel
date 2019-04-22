<?php

namespace App\Http\Controllers;

use App\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images =Images::all();
        $images =$images->sortBy('desc');
        return view('admin.images',compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->image;
        $size=round($image->getClientSize()/1024,2);
        $extension=$image->getClientOriginalExtension();
        $input=$request->all();
        $path = $this->path($input['path']);
        $storage_path = 'public/'.$path;

        $filename=$this->generateFileName();
        $link=config('app.url').'storage/'.$path.'/'.$filename.'.'.$extension;
//        dd($link);
        $image->storeAs($storage_path,$filename.'.'.$extension);
        $img =new Images();
        $img->filename =$filename;
        $img->storage_path =$storage_path;
        $img->extension = $extension;
        $img->link =$link;
        $img->file_size=$size;
        $img->save();
        return back();
    }

    public function path($option){
        switch($option){
            case 1:
                return 'img/product';
                break;

            case 2:
                return 'img/banner';
                break;

            case 3:
                return 'img/avatar';
                break;

            default:
                return 'img/other';
                break;
        }
    }

    public function generateFileName(){
        while(true) {
            $string = Str::random(25);
            if($this->isUnique($string)){
                return $string;
                break;
            }
        }
    }
    public function isUnique($string){
        $images= Images::all();
        if($images){
            foreach ($images as $image){
                if($image->filename == $string){
                    return false;
                    break;
                }
            }
            return true;
        }
        return true;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Images $images)
    {
        //
    }

    public function destroy(Images $images)
    {

        $images->delete();
        return back();
    }
}
