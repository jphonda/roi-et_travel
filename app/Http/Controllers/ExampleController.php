<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    //
    public function create(){
        return view('admin.upload');
    }

    public function store(Request $request){
        $files =  $request->file('image');
        $extension =  $files->getClientOriginalExtension();
        $filename = time() . '.' .$extension;
        $files->move('avatar' , $filename);
        return  $filename;
        //Save upload image to 'avatar' folder which in 'storage/app/public' folder
        // $path = $request->file('image')->store('avatar','public');
        //echo $path;
        //Save $path to database or anything else
        //...
        // return redirect('/');
    }
}
