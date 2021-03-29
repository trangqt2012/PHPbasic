<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home()
    {
        return view('client/home');
    }
    public function catagory()
    {
        return view('client/catagory');
    }
    public function contact()
    {
        return view('client/contact');
    }
    public function singleBlog()
    {
        return view('client/single-blog');
    }
}
