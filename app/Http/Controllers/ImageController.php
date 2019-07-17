<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\ImageModel;
use Image;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = ImageModel::latest()->first();
        return view('createimage', compact('image'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $originalImage = $request->filename;

        $contents = @file_get_contents($originalImage);
        if($contents){
            $name = substr($originalImage, strrpos($originalImage, '/') + 1);
            $newImage = Image::make($originalImage);
            $newPath = public_path().'/thumbnail/';
            $originalPath = public_path().'/images/';
            $newImage->save($originalPath.time().$name); 

            $newImage->pixelate(3);    
            // take out red color and add  a bit of green and blue (R,G,B)
            $newImage->colorize(-10, 0, 10);
            $newImage->colorize(0, 10, 0);
            

            $newImage->text('SHCC TEST', 200, 10, function($font) {
                $font->file('fonts/FunSized.ttf');
                $font->size(50);
                $font->color('#a3181d');
                $font->align('center');
                $font->valign('top');
            });


            $newImage->save($newPath.time().$name); 

            $imagemodel= new ImageModel();
            $imagemodel->filename=time().$name;
            $imagemodel->save();

            return response()->file($newPath.time().$name);
        }else{
            $error = ['code'=>404,'message'=>'Invalid URL'];
            return response()->json($error, 404);
        }
    }
   
}
