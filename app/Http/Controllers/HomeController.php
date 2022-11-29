<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Dashboard()
    {
        $list= Post::all();
        return view('Dashboard',compact('list'));
    }
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
}
