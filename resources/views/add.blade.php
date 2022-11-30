@extends('layout.app')
@section('content')
<div class="container mt-3 p-5" >
    <h2>Add Data</h2>
    <form action="{{route('saveData')}}" method="post">
        @csrf
        <div class="form-group  p-2">
            <label for="exampleInputPassword1">Post</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Post"  name="title">
          </div>
        <button class="btn btn-primary" style="margin-top: 15px" type="submit">Save</button>
        </div>
    </form>
</div>
@endsection
