<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class connectDB extends Controller
{
    //
    public function connect(){
        $user =  DB::select('SELECT * FROM `tb_place` WHERE id = 1');
        return view('admin.test')->with('datas' , $user);
    }
}