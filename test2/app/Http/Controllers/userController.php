<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function login()
    {
        return view('client/login');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
    public function checkLogin(Request $request)
    {
        $name = $request->name;
        $pass = md5($request->password);
        $validate = User::checkLogin($name, $pass);
        if ($validate) {
            session(['id' => $validate->id]);
            $user = User::userByID(session('id'));
            if ($user -> permission==0) {
                return redirect('/');
            }else{
                return redirect('/admin');
            }
        } else {
            return redirect('/login');
        }
    }
}
