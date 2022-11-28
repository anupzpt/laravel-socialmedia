@extends('layout.app')
@section('content')
        <section class="vh-90 bg-image"
        style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-80">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body  p-5">
                    <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                    <form action="{{route('registerUser')}}" method="POST">
                        @csrf
                        <div class="form-outline mb-4">
                        <input type="text" id="form3Example1cg" class="form-control form-control-lg @error('name')is-invalid @enderror" name="name" />
                        <label class="form-label" for="form3Example1cg">Your Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                        </div>

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

                        {{-- <div class="form-outline mb-4">
                        <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                        </div> --}}
                        <div class="d-flex justify-content-center">
                        <button type="submit"
                            class="btn btn-success  btn-lg text-white ">Register</button>
                        </div>
                        <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="{{route('login')}}"
                            class="fw-bold text-body"><u>Login here</u></a></p>

                    </form>

                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    {{-- <div class="container p-10 mt-8">
        <h1>Register</h1>
        <div class="mb-3">
            <label for="exampleFormControlInput" class="form-label">Name </label>
            <input type="text" class="form-control @error('name')is-invalid @enderror" name="name" id="exampleFormControlInput" placeholder="Enter Name">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control @error('email')is-invalid @enderror" name="email"   id="exampleFormControlInput1" placeholder="name@example.com">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password </label>
            <input type="password" class="form-control @error('password')is-invalid @enderror" name="password" id="exampleFormControlInput1" placeholder="Enter Password">
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </div> --}}
</form>
@endsection
