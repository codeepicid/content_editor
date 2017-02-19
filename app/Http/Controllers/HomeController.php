<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AccessMenu;
use App\User;
use App\Employee;
use Session;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function editprofile(){
        $useractive = Session::get('user');
        $data = User::where('email','=',$useractive['email'])->first();
        return view('home.profile.edit')
            ->with('data',$data);
    }

    public function updateprofile(Request $request){
        $useractive = Session::get('user');

        $field = User::find($useractive['email']);
        $field->email = $request->email;
        $field->fullname = $request->fullname;
        $field->save();

        if($request->password != ''){
            $field = User::find($useractive['email']);
            $field->password = encrypt($request->password);
            $field->save();
        }

        $usernew = User::find($useractive['email']);
        $user = array(
            'email' => $usernew['email'],
            'fullname' => $usernew['fullname'],
            'leveluser' => $usernew['leveluser']
        );
        Session::put('user',$user);

        return redirect('v/home')->with('type','success')->with('message','Profile has been updated');
    }
}
