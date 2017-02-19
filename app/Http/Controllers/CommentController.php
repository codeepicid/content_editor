<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function index($idpost)
    {
        $data = Comment::where('postid','=',$idpost)->orderBy('date','desc')->get();
        $post = Post::find($idpost);
        return view('comment.index')
            ->with('data',$data)
            ->with('post',$post);
    }

    public function create($idpost)
    {
        $post = Post::find($idpost);
        return view('comment.create')
            ->with('post',$post);
    }

    public function store(Request $request,$idpost)
    {
        $field = new Comment;
        $field->name = $request->name;
        $field->comment = $request->comment;
        $field->date = $request->date;
        $field->save();
        return redirect('v/post/'.$idpost.'/comment')
            ->with('type','success')->with('message','Comment has been saved');
    }

    
    public function show($id)
    {
        //
    }

    public function edit($idpost,$id)
    {
        $data = Comment::find($id);
        $post = Post::find($idpost);
        return view('comment.edit')
            ->with('data',$data)
            ->with('post',$post);
    }

    public function update(Request $request, $idpost, $id)
    {
        $field = Comment::find($id);
        $field->name = $request->name;
        $field->comment = $request->comment;
        $field->date = $request->date;
        $field->save();
        return redirect('v/post/'.$idpost.'/comment')
            ->with('type','success')->with('message','Comment has been updated');
    }

    public function destroy($idpost,$id)
    {
        $field = Comment::find($id);
        $field->delete();
        return redirect('v/post/'.$idpost.'/comment')
            ->with('type','success')->with('message','Comment has been deleted');
    }
}
