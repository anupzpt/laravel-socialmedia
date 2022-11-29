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
                    <th>{{$sn++}}</th>
                    <th>{{$value->title}}</th>

                    {{-- function ko name user xa in model post--}}
                    <th>{{$value->user->name}}</th>
                    @if(auth()->user()->id == $value->user->id)
                    <th>
                        <button class="btn btn-danger"><a href="{{url ('/delete/'.$value->id)}}" class="text-white"><span class="fas fa-trash ml-3"></a></button>
                    </th>
                    {{-- <td>
                        <button class="btn btn-primary"><a href="{{url('/edit/'.$value->id)}}" class="text-white"><span class="fas fa-pencil ml-3"></a></button>
                    </td> --}}
                    @endif
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
