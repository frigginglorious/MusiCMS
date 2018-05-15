<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Image;


class sliderPicsController extends Controller
{
    public function index(){
        $collection = $this->getCollection();
        $path = $this->getPath();

        return view('sliderPics', ['collection' => $collection, 'path'=>$path]);
        // dd($collection);
    }
    public function destroy($request){
        $directory = $this->getPath();
        $deleteFile = $directory . "/" . $request;
        // dd($deleteFile);
        unlink($deleteFile);
        return redirect()->action('sliderPicsController@index');
    }

    public function store(Request $request){
        // dd($request);
        $file = $request->file('pic');
        // dd($file->getClientOriginalName());
        $name = preg_replace('/[^A-Za-z0-9\.]/', '', $file->getClientOriginalName());
        // dd($name);
        $fullRequest = $request->all();

        $fullRequest['pic'] = $name;

        $file->move(public_path("/uploads/sliderPics"), $name);

        $this->imgSize($name);
        return redirect()->action('sliderPicsController@index');

    }
    public function imgSize($file){
        // open an image file
        $fullDirectory = getcwd() . "/uploads/sliderPics/" . $file;
        $fullDirectory = escapeshellcmd($fullDirectory);
        $img = Image::make($fullDirectory);
        //   $img->resize(3200, 200, function ($constraint) {
        //       $constraint->aspectRatio();
        //   });
        $w = $img->width(); // 2560
        $h = 600; //$img->height();
        $c1 = 0;
        $c2 = ($img->height() / 2)-($h / 2);
        // $img->crop($w, $h, $c1, $c2);
        $img->fit(1280, $h);

        $img->save($fullDirectory);
    }

    public function getCollection(){
        $directory = getcwd() . "/uploads/sliderPics";
        // dd($directory);
        $files = File::allFiles($directory);
        // dd($files);
        $collection = collect();
        foreach ($files as $file)
        {
            $path = $file->getPath();
            // echo (string)$file, "<br>\n";
            $collection->push($file->getFilename());
        }
        return $collection;
    }
    public function getPath(){
        $directory = getcwd() . "/uploads/sliderPics";
        // dd($directory);
        $files = File::allFiles($directory);
        // dd($files);
        $path = '';
        $collection = collect();
        foreach ($files as $file)
        {
            $path = $file->getPath();
            // echo (string)$file, "<br>\n";
            $collection->push($file->getFilename());
        }
        return $path;
    }
}
