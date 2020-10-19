<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DropzoneController extends Controller
{
    function index()
    {
     return view('admin.test');
    }

    function upload(Request $request)
    {
     $image = $request->file('file');

     $imageName = time() . '.' . $image->extension();

     $image->move('avatar', $imageName);

     DB::table('tb_slider')->insert(
            [
            'id_place' => $request['__genId'],
            'image' => $imageName,
            ]
        );

     return response()->json(['success' => $imageName]);
    }

    function fetch()
    {
     $images = \File::allFiles('avatar');
     $output = '<div class="row">';
     foreach($images as $image)
     {
       $data = "avatar/" . $image->getFilename();
    $pathImage = "http://xn--101-vml3c4a4gxd8c.com/" . $data;
      $output .= '
      <div class="col-md-6">
                <img src="'.asset('avatar/' . $image->getFilename()).'" class="img-thumbnail"  style="height:175px; width:100%; object-fit:cover" />
                <input type="text" id="myInput" value="'. $pathImage .'" class="w-100">                                
                <button class="mb-2" onclick="select_Copy()">Copy text</button>
                
       </div>
      ';
     }
     $output .= '</div>';
     echo $output;
    }

    function delete(Request $request)
    {
     if($request->get('name'))
     {
      \File::delete(public_path('images/' . $request->get('name')));
     }
    }

    function __add(Request $request){
        DB::table('tb_slider')->insert(
            [
            'id_place' => 123123222,
            'image' => $request->add,
            ]
        );
        return $request->post();
    }
}
?>
