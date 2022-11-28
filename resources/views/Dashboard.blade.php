@extends('layout.app')
@section('content')
<div class="container d-flex justify-content-between">
    <h1>Dashboard</h1>
    <form action="{{route('logout')}}" method="GET">
        <button type="submit"
        class="btn btn-success text-white">Logout</button>
        </div></form>
</div>

@endsection
