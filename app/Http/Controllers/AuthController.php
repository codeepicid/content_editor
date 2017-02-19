<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Encryption\DecryptException;
use Session;
use App\User;
use App\AccessMenu;

class AuthController extends Controller
{
    public function login(){
        Session::forget('user');
        return view('auth.login');
    }

    public function loginproses(Request $request){
        $count = User::where('email', '=', $request->email)->count();
        if ($count > 0) {
            $data = User::where('email', '=', $request->email)->first();

            $password = decrypt($data['password']);
            if ($password == $request->password) {
                $user = array(
                    'email' => $data['email'],
                    'fullname' => $data['fullname'],
                    'leveluser' => $data['leveluser']
                );
                Session::put('user',$user);
                return redirect('v/home');
            } else {
                return redirect('auth/login')->with("message","Email or Password Doesn't Match");
            }
        } else {
            return redirect('auth/login')->with("message","Email Not Fount");
        }
    }

    public function logout(){
        return redirect('auth/login');
    }
}
