<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $data = Gallery::orderBy('title','asc')->get();
        return view('gallery.index')
            ->with('data',$data);
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $field = new Gallery;
        $field->url = $request->url;
        $field->title = $request->title;
        $field->location = $request->location;
        $field->save();
        return redirect('v/gallery')
            ->with('type','success')->with('message','Gallery has been saved');
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Gallery::find($id);
        return view('gallery.edit')
            ->with('data',$data);
    }

    public function update(Request $request, $id)
    {
        $field = Gallery::find($id);
        $field->url = $request->url;
        $field->title = $request->title;
        $field->location = $request->location;
        $field->save();
        return redirect('v/gallery')
            ->with('type','success')->with('message','Gallery has been updated');
    }

    public function destroy($id)
    {
        $field = Gallery::find($id);
        $field->delete();
        return redirect('v/gallery')
            ->with('type','success')->with('message','Gallery has been deleted');
    }
}
