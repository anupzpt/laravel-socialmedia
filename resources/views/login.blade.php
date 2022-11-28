@extends('layout.app')
@section('content')
@if (Session::has('fail'))
<div class="alert alert-danger" role="alert">
    {{Session::get('fail')}}
</div>
@endif
<section class="vh-90  bg-image"
style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
<div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-80">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5">LogIn</h2>

            <form action="{{route('loginUser')}} " method="POST">
                @csrf

                <div class="form-outline mb-4">
                <input type="email" id="form3Example3cg" class="form-control form-control-lg @error('email')is-invalid @enderror" name="email" />
                <label class="form-label" for="form3Example3cg">Your Email</label>
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                 @enderror
                </div>
                <div class="form-outline mb-4">
                <input type="password" id="form3Example4cg" class="form-control form-control-lg @error('password')is-invalid @enderror" name="password" />
                <label class="form-label" for="form3Example4cg">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                </div>

                <div class="form-outline mb-4">
                <input type="password" id="form3Example4cdg" class="form-control form-control-lg @error('re-password')is-invalid @enderror" name="re-password" />
                <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                @error('re-password')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
                </div>
                <div class="d-flex justify-content-center">
                <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-white">LogIn</button>
                </div>
                <p class="text-center text-muted mt-3 mb-0">Don't have an account? <a href="{{route('register')}}"
                    class="fw-bold text-body"><u>Register here</u></a></p>

            </form>

            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>

@endsection
