<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $data = User::orderBy('fullname','asc')->get();
        return view('user.index')
        ->with('data',$data);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $field = new User;
        $field->email = $request->email;
        $field->fullname = $request->fullname;
        $field->password = encrypt($request->password);
        $field->leveluser = $request->leveluser;
        $field->save();
        return redirect('v/user')
            ->with('type','success')->with('message','User has been saved');
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = User::find($id);
        return view('user.edit')
            ->with('data',$data);
    }

    public function update(Request $request, $id)
    {
        $field = User::find($id);
        $field->email = $request->email;
        $field->fullname = $request->fullname;
        $field->leveluser = $request->leveluser;
        $field->save();
        if($request->password != ''){
            $field = User::find($id);
            $field->password = encrypt($request->password);
            $field->save();
        }
        return redirect('v/user')
            ->with('type','success')->with('message','User has been updated');
    }

    public function destroy($id)
    {
        $field = User::find($id);
        $field->delete();
        return redirect('v/user')
            ->with('type','success')->with('message','User has been deleted');
    }
}
