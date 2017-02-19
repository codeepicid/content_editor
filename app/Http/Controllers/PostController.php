<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostController extends Controller
{
	public function index()
	{
		$data = Post::orderBy('date','desc')->get();
		return view('post.index')
			->with('data',$data);
	}

	public function create()
	{
		return view('post.create');
	}

	public function store(Request $request)
	{
		$field = new Post;
		$field->url = $request->url;
		$field->title = $request->title;
		$field->image = 'default.png';
		$field->category = $request->category;
		$field->tag = $request->tag;
		$field->content = $request->content;
		$field->date = $request->date;
		$field->time = date('H:i:s');
		$field->save();

		if($request->hasFile('image')){
			$image = 'image_of_post_'.$request->url.'.'.$request->image->extension();
			$request->image->move(public_path('images/post/'),$image);

			$field2 = Post::find($field->id);
			$field2->image = $image;
			$field2->save();
		}

		return redirect('v/post')
			->with('type','success')->with('message','Post has been saved');
	}

	
	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		$data = Post::find($id);
		return view('post.edit')
			->with('data',$data);
	}

	public function update(Request $request, $id)
	{
		$field = Post::find($id);
		$field->url = $request->url;
		$field->title = $request->title;
		$field->category = $request->category;
		$field->tag = $request->tag;
		$field->content = $request->content;
		$field->date = $request->date;
		$field->save();

		if($request->hasFile('image')){
			$image = 'image_of_post_'.$request->url.'.'.$request->image->extension();
			$request->image->move(public_path('images/post/'),$image);

			$field2 = Post::find($id);
			$field2->image = $image;
			$field2->save();
		}

		return redirect('v/post')
			->with('type','success')->with('message','Post has been updated');
	}

	public function destroy($id)
	{
		$field = Post::find($id);
		$field->delete();
		return redirect('v/post')
			->with('type','success')->with('message','Post has been deleted');
	}

	public function listcategory(){
		$data = DB::select('SELECT DISTINCT category FROM posts ORDER BY category ASC');
		return response()->json($data);
	}
}
