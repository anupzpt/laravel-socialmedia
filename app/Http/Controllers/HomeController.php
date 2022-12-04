<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Dashboard()
    {
        $list= Post::all();
        // $list= Post::where('user_id', '=', auth()->user()->id)->get();

        // Post::create([
        //     'title' =>
        //     'user_id'=>auth()->user()->id,
        // ]);

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
    public function addData(){
        return view('add');
    }

}
