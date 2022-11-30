@extends('layout.app')
@section('content')
<div class="container mt-5 d-flex justify-content-between">
    <h1>Dashboard</h1>
    <div>
        <a class="btn btn-primary" href="{{route('addData')}}" role="button">Add Data</a>

    </div>
    {{-- <form action="{{route('logout')}}" method="GET">
        <button type="submit" class="btn btn-success text-white">Logout</button>
    </form> --}}
</div>
<div class="sub-container p-5">
        <table class="table table-bordered mt-3 text-center p-5 py-5">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Post</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>

            </thead>
            <tbody>
                @php
                    $sn=1;
                @endphp
                @foreach ($list as $value)
                <tr>
                    <td>{{$sn++}}</td>
                    <td>{{$value->title}}</td>
                    {{-- function ko name user xa in model post--}}
                    <td>{{$value->user->name}}</td>
                    <td>
                        @if(auth()->user()->id == $value->user->id)
                        <button class="btn btn-primary"><a href="{{url('/edit/'.$value->id)}}" class="text-white"><span class="fas fa-pencil ml-3"></a></button>
                            <button class="btn btn-danger"><a href="{{url ('/delete/'.$value->id)}}" class="text-white"><span class="fas fa-trash ml-3"></a></button>
                                @endif

                    <td >

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
