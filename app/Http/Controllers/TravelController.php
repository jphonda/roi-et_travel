<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TravelController extends Controller
{
    //

    public function __genId(){
        $num = random_int(0, 1000);
        $url = "/create_travel/$num ";

        return redirect($url)->with('id' , $num);

    }

    public function __insert(Request $req){        
        $files =  $req->file('upload_imgs');        
        foreach($files as $item){
            $random = random_int(0, 1000000000);
            $extension =  $item->getClientOriginalExtension();
            $filename = $random . '.' .$extension;
            $item->move('avatar' , $filename);
            DB::table('tb_slider')->insert(
                        [
                            'id_place' => $req['__genId'],
                            'image' => $filename                                      
                        ]
                    );
            
        }
                
        $image =  $req->file('image');
        $extension =  $image->getClientOriginalExtension();
        $imagename = time() . '.' .$extension;
        $image->move('avatar' , $imagename);
        
        DB::table('tb_place')->insert(
            [
            'id_place' => $req['__genId'],
            'name' => $req['name'],
            'content' => $req['data'],
            'map' => $req['map'],
            'avatar' => 'asdfdf',
            'image' => $imagename,
            'score' => 0,
            'review' => 0,
            'status' => $req->status]
        );

        
        return redirect('/__genId');
    }

    public function __updatePlace(Request $req){
        
        $files =  $req->file('upload_imgs');        
        if($files != null){
            foreach($files as $item){
                $random = random_int(0, 1000000000);
                $extension =  $item->getClientOriginalExtension();
                $filename = $random . '.' .$extension;
                $item->move('avatar' , $filename);
                DB::table('tb_slider')->insert(
                            [
                                'id_place' => $req->id_place,
                                'image' => $filename                                      
                            ]
                        );
                
            }
        }
        

        $image =  $req->file('image');        
        $extension =  $image->getClientOriginalExtension();
        $imagename = time() . '.' .$extension;
        $image->move('avatar' , $imagename);

        $data = DB::table('tb_place')->where('id_place', $req->id_place)->get();
        
        
        
        // return $data;       
        foreach ($data as $user) {
            $datas = DB::select('SELECT * FROM `tb_place`');   
            $update = DB::table('tb_place')->where('id_place' , $user->id_place )
            ->update([                                
                'name' => $req->name,
                'content' => $req->data,
                'map' => $req->map,
                'avatar' => 'asdfdf',
                'image' => $imagename,
                'score' => 0,
                'review' => 0,
                'status' => $req->status
                ]);    
                return view('admin.component.table_place')->with('datas' , $data);            
        }
    }
  

    public function __disOtop(Request $req){
        $otop = DB::select('SELECT * FROM `tb_otop`');
        return view('admin.component.create_otop')->with('otops',$otop);
    }

    public function __insertOtop(Request $req){
        $files =  $req->file('image');
        $extension =  $files->getClientOriginalExtension();
        $filename = time() . '.' .$extension;
        $files->move('avatar' , $filename);
        // return  $filename;

        DB::table('tb_otop')->insert(
            ['name' => $req['name'],        
            'image' => $filename,
            'price' => $req['price']]
        );

        

        return __disOtop();
    }
}
