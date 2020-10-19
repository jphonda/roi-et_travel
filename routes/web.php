<?php

use App\Http\Controllers\Admin\DashBroadController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\connectDB;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DropzoneController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;




//frontend

Route::get('/', function () {
    return view('frontend.component.index');
});

Route::get('/detail/s1', function () {
    $otop = DB::select('SELECT * FROM `tb_otop`');
    return view('frontend.component.dummycontent')->with('otops' , $otop);
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/index', [FrontendController::class , '__getData'])->name('index');
Route::get('/detail_travel/{id}', [FrontendController::class , '__getDetail']);
Route::get('/search', [FrontendController::class , '__searchs']);
Route::get('/status/{id}', [FrontendController::class , '__selects']);




//admin
Route::middleware(['auth:sanctum', 'verified'])->get('/admin', [DashBroadController::class, 'index'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/manage-user', [UserController::class, 'index'])->name('manage-user');
Route::middleware(['auth:sanctum', 'verified'])->post('/add-user', [UserController::class, 'store'])->name('add-user');
Route::middleware(['auth:sanctum', 'verified'])->put('/del-user/{id}', [UserController::class, 'destroy'])->name('del-user');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin/dashboard', function () {
    $score = 0;    
    $travel = DB::select('SELECT * FROM `tb_place`');
    $otop = DB::select('SELECT * FROM `tb_otop`');
    foreach ($travel as $key => $value) {
        $score = $value->score + $score;
    }
    $sum = array([
        'otop' => count($otop),
        'place' => count($travel),
        'score' => $score
    ]);

    // return $sum;
    return view('admin.component.dashboard')
    ->with('datas' , $travel)
    ->with('otop' , $otop)
    ->with('sum' , $sum)
    ;    
});

Route::middleware(['auth:sanctum', 'verified'])->get('/table_place', function () {
    $datas = DB::select('SELECT * FROM `tb_place`');
    return view('admin.component.table_place')->with('datas' , $datas);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/table_otop', function () {
    $datas = DB::select('SELECT * FROM `tb_otop`');
    return view('admin.component.table_otop')->with('datas' , $datas);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/edit_place/{id}', function ($id_place) {
    $data = DB::table('tb_place')->where('id_place',$id_place)->get();
    $slider = DB::table('tb_slider')->where('id_place',$id_place)->get();
    return view('admin.component.edit_place')->with('datas' , $data)->with('img_slider', $slider);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/edit_slider/{id}', function ($id_place) {   
    $slider = DB::table('tb_slider')->where('id_place',$id_place)->get();
    return view('admin.component.edit_slider')->with('img_slider', $slider);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/admin_deleteImage/{id}' , function($id){
    $delete = DB::table('tb_slider')->where('id',$id)->delete();
    return Redirect::back();
});

Route::middleware(['auth:sanctum', 'verified'])->get('/edit_place-delete/{id}' , function($id){
    $delete = DB::table('tb_place')->where('id',$id)->delete();
    return Redirect::back();
});

Route::middleware(['auth:sanctum', 'verified'])->get('/edit_otop-delete/{id}' , function($id){
    $delete = DB::table('tb_otop')->where('id',$id)->delete();
    return Redirect::back();
});

Route::middleware(['auth:sanctum', 'verified'])->post('/edit_place/{id}', [TravelController::class , '__updatePlace']);

Route::middleware(['auth:sanctum', 'verified'])->get('/__genId', [TravelController::class , '__genId']);

Route::middleware(['auth:sanctum', 'verified'])->get('/otop', [TravelController::class , '__disOtop']);
Route::middleware(['auth:sanctum', 'verified'])->post('/create_otop', [TravelController::class , '__insertOtop']);

// Route::post('/index', function (Request $req) {
//     return $req->post();
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/create_travel/{id}', function (Request $req) {
    $id =  $req->id;
    // return $id;
    return view('admin.component.create_profile')->with('__genId' , $id);
});

Route::middleware(['auth:sanctum', 'verified'])->post('/create_travel', [TravelController::class , '__insert']);

Route::middleware(['auth:sanctum', 'verified'])->get('/connect', [connectDB::class , 'connect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/example/create', [ExampleController::class , 'create']);
Route::middleware(['auth:sanctum', 'verified'])->post('/example', [ExampleController::class , 'store']);





//test

Route::get('/add', function () {
    return view('admin.component.add');
});

Route::post('/add', [DropzoneController::class ,'__add']);

Route::get('dropzone', [DropzoneController::class ,'index']);

Route::post('dropzone/upload', [DropzoneController::class ,'upload'])->name('dropzone.upload');

Route::get('dropzone/fetch', [DropzoneController::class ,'fetch'])->name('dropzone.fetch');

Route::get('dropzone/delete', [DropzoneController::class ,'delete'])->name('dropzone.delete');
