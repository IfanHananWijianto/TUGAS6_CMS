@extends('auth')
@section('title', 'Login')
@section('konten')


<div class="col-md-4 mx-auto my-5" >
    <div class="card" >
        <div class="card-body">
            <div align="center"><h2>Login</h2></div>
            <form action="{{ route("do.login") }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address :</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="@gmail.com">
                            @error('email')
                                <div id="emailHelp" class="form-text">{{ $message }}</div>
                            @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password :</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                            @error('password')
                                <div id="passwordHelp" class="form-text">{{ $message }}</div>
                            @enderror
                </div>
                <p>Belum punya akun?<a href="{{ route('register') }}">Regrister</a></p>
                <div class="mb-3 d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


