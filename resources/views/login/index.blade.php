@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria label="Tutup">
                </button>
            </div>
        @endif

        @if(session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria label="Tutup">
                </button>
            </div>
        @endif



        <!-- Form Login -->
        <h1 class="h4 mt-5 mb-3 fw-normal text-center animate__animated animate__fadeIn">PENELITIAN - LPPM</h1>
        <br>        
        <main class="form-signin border-3 mb-8">
            <form action="/login" method="post" class="animate__animated animate__animate__fadeIn">
                @csrf
                <center><img class="mb-4" src="/img/Logo.png" alt="" width="30%"></center>
                <h1 class="h5 mb-3 text-center">Universitas<br>Atma Jaya Yogyakarta</h1>

                <div class="form-floating">
                <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="name@example.com" autofocus required value="{{old ('username')}}">
                <label for="username">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>

                <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                </div>

                <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
        </main>
    </div>
</div>


@endsection