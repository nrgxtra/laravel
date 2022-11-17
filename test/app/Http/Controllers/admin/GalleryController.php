<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', ['galleries' => $galleries]);
    }

    public function create()
    {

        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $data = [];
        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('gallery', 'public');
            Gallery::create($data);
            return redirect('/admin/gallery')->with('success', 'Picture Added');
        }else{
            return back()->with('fail', 'Uou have to upload image');
        }




    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', ['gallery' => $gallery]);
    }

    public function save(Request $request, $id)
    {

        $gallery = Gallery::find($id);
        if($request->hasFile('image')){
            $gallery['image'] = $request->file('image')->store('gallery', 'public');
            $gallery->update();
            return redirect('/admin/gallery')->with('success', 'Picture updated');
        }else{
            return back()->with('fail', 'Uou have to upload image');
        }
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return back()->with('success', 'Deleted');
    }
}
