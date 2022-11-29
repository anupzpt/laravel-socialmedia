@extends('layout.app')
@section('content')
<div class="container d-flex justify-content-between">
    <h1>Dashboard</h1>
    <form action="{{route('logout')}}" method="GET">
        <button type="submit"
        class="btn btn-success text-white">Logout</button>
        </div></form>
        <table class="table">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Post</th>
                    <th>Created By</th>
                </tr>

            </thead>
            <tbody>
                @php
                    $sn=1;
                @endphp
                @foreach ($list as $value)
                <tr>
                    <th>{{$sn++}}</th>
                    <th>{{$value->title}}</th>

                    {{-- function ko name user xa in model post--}}
                    <th>{{$value->user->name}}</th>
                    @if(auth()->user()->id == $value->user->id)
                    <th><button>delete</button></th>
                    @endif
                </tr>
                @endforeach

            </tbody>
        </table>
</div>

@endsection
