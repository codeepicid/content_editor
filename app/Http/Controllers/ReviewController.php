<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $data = Review::orderBy('date','desc')->get();
        return view('review.index')
            ->with('data',$data);
    }

    public function create()
    {
        return view('review.create');
    }

    public function store(Request $request)
    {
        $field = new Review;
        $field->name = $request->name;
        $field->review = $request->review;
        $field->date = $request->date;
        $field->save();
        return redirect('v/review')
            ->with('type','success')->with('message','Review has been saved');
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Review::find($id);
        return view('review.edit')
            ->with('data',$data);
    }

    public function update(Request $request, $id)
    {
        $field = Review::find($id);
        $field->name = $request->name;
        $field->review = $request->review;
        $field->date = $request->date;
        $field->save();
        return redirect('v/review')
            ->with('type','success')->with('message','Review has been updated');
    }

    public function destroy($id)
    {
        $field = Review::find($id);
        $field->delete();
        return redirect('v/review')
            ->with('type','success')->with('message','Review has been deleted');
    }
}
