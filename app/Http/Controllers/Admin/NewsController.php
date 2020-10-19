<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TbNew;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = TbNew::all();
        return view('admin.component.news.table_news')
            ->with('news', $news);
    }

    public function create()
    {
        return view('admin.component.news.add-form');
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

        $new = new TbNew();
        $new->name = $request->name;
        $new->content = $request->data;
        $new->image = $filename;
        $new->save();

        return redirect('news');
    }

    public function edit($id)
    {
        $news = TbNew::find($id);

        return view('admin.component.news.edit-form')
            ->with('news', $news);
    }

    public function update(Request $request, $id)
    {
        $files =  $request->file('image');

        $request->validate([
            'name' => 'required',
        ]);

        $filename = "";
        if ($files) {
            $random = random_int(0, 1000000000);
            $extension =  $files->getClientOriginalExtension();
            $filename = $random . '.' . $extension;
            $files->move('avatar', $filename);
        }

        $new = TbNew::find($id);
        $new->name = $request->name;
        $new->content = $request->data;
        if ($files) {
            $new->image = $filename;
        }
        $new->save();

        return redirect('news');
    }

    public function destroy($id)
    {
        $news = TbNew::find($id);
        $news->delete();

        return redirect('news');
    }
}
