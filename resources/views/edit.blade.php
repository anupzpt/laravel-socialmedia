@extends('layout.app')
@section('content')
<div class="container mt-3">
    <h2 >Edit</h2>
        <form action="{{route('updateData')}}" method="post">
        @csrf
        <div class="form-group  p-2">
            <label for="exampleInputPassword1">Post</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="title" value="{{$data->title}}">
          </div>
            <div>
                <input type="hidden" name="id" value={{$data->id}}>
            </div>
            <div>
            <button class="btn btn-primary" style="margin-top: 15px" type="submit">Update</button>
            </div>
        </form>
  </div>
@endsection
