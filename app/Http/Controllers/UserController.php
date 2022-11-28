<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function registerUser(Request $req)
    {
        // dd($req->all());
        //data linxa ra save garxa ekai choti//
        $req->validate([
            'name'  => 'required',
            'email'  => 'required|unique:users',
            'password'  =>'required',
        ]);
        User::create([
            'name'  => $req->name,
            'email'  => $req->email,
            'password'  =>Hash::make($req->password),
        ]);
        // return redirect('/login');
        return redirect()->route('login');

    }
    public function loginUser(Request $req)
    {
        // dd($req->all()); yesle data liyako dekhauxa

        $req->validate([
            'email'  => 'required|email',
            'password'  =>'required',
            're-password'=>'required|same:password',
        ]);

        //attempt le sab data lagcha afau hash jasto

      if(Auth::attempt($req->only(['email', 'password',])))
      {
        return redirect()->route('Dashboard');
      }
      else{
        return back()->with('fail','User not found ');
      }
        // return redirect('/login');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
