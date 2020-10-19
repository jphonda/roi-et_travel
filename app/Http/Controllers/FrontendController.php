<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    //
    public function __getData(){
        $data =  DB::select('SELECT * FROM `tb_place`');
        return view('frontend.component.tour_grid')->with('datas' , $data);
    }

    public function __searchs(Request $req){        
        
        $data = DB::table('tb_place')->where('name', 'LIKE', "$req->search%")->get();
        // $data = DB::select('SELECT * FROM tb_place WHERE name LIKE '12%'')->get();
        return view('frontend.component.search')->with('datas', $data);
    }

    public function __selects($id){        
        // $data = DB::table('tb_place')->where('id_place',$id)->get();
        $data = DB::table('tb_place')->where('status', $id)->get();
        // return $data ;
        // $data = DB::select('SELECT * FROM tb_place WHERE name LIKE '12%'')->get();
        return view('frontend.component.selects')->with('datas', $data);
    }

    public function __getDetail($id){

        // $update = DB::select('UPDATE `tb_place` SET `score` = 1 WHERE `tb_place`.`id` = 1');
        $data = DB::table('tb_place')->where('id_place',$id)->get();
        $slider = DB::table('tb_slider')->where('id_place',$id)->get();
    //    return $data;
        // $data = DB::select('SELECT * FROM `tb_place` WHERE id = 1');
        $otop = DB::select('SELECT * FROM `tb_otop`');
        foreach ($data as $user) {
            $update = DB::table('tb_place')->where('id_place' , $id )->update(['score' => $user->score + 1]);            
            return view('frontend.component.detail')->with('datas' , $data)->with('otops' , $otop)->with('slider',$slider);
        }
        
        // $update = DB::table('tb_place')->where('id' , 1 )->update(['score' => 3 ]);

        // // $data = DB::select('SELECT * FROM `tb_place` WHERE id = 1');
        // return view('frontend.detail')->with('datas' , $data);
    }
}
