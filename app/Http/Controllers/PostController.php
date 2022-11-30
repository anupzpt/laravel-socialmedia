<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
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
    public function edit($id)
    {
        $data= Post::find($id);
        return view('edit',['data'=>$data]);
    }
    public function updateData(Request $request)
    {
        $newObj=Post::find($request->id);
        $newObj->update([
            'title' =>$request->title,
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
