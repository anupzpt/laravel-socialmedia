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
    public function saveData(Request $request)
    {
        $request->validate([
            'title' =>'required',
        ]);
        Post::create([
            'title'=>$request->title,
            'user_id'=>auth()->user()->id,
        ]);
        return redirect('Dashboard');
    }
    public function delete($id)
    {
        $data= Post::find($id);
        $data->delete();
        return redirect('Dashboard');
    }
}
