<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
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
        Alert::success('Saved', 'Data Saved Successfully');
        return redirect()->route('Dashboard');
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
        return redirect()->route('Dashboard');
    }
    public function delete($id)
    {
        $data= Post::find($id);
        $data->delete();
        return redirect()->route('Dashboard');

    }
}
