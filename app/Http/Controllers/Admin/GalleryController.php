<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TbGallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gallerys = TbGallery::all();
        return view('admin.component.gallery.table_gallery')
            ->with('gallerys', $gallerys);
    }

    public function create()
    {
        return view('admin.component.gallery.add-form');
    }

    public function store(Request $request)
    {
        $files =  $request->file('image');

        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $filename = "";
        if ($files) {
            $random = random_int(0, 1000000000);
            $extension =  $files->getClientOriginalExtension();
            $filename = $random . '.' . $extension;
            $files->move('avatar', $filename);
        }

        $gallery = new TbGallery();
        $gallery->name = $request->name;
        $gallery->discription = $request->discription;
        $gallery->image = $filename;
        $gallery->save();

        return redirect('gallerys');
    }

    public function destroy($id)
    {
        $news = TbGallery::find($id);
        $news->delete();

        return redirect('gallerys');
    }
}
