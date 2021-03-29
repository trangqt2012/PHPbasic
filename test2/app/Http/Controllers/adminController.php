<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function showAccount()
    {
        $user = User::showAccount();
        return view('admin/home', ['user'=>$user]);
    }
    public function showAccountUser()
    {
        $user = User::showAccountUser();
        return view('admin/home', ['user'=>$user]);
    }
    public function showAccountAdmin()
    {
        $user = User::showAccountAdmin();
        return view('admin/home', ['user'=>$user]);
    }
}
