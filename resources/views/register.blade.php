@extends('auth')
@section('title', 'Register')
@section('konten')


<div class="col-md-4 mx-auto my-5">
    <div class="card">
        <div class="card-body">
            <div align="center"><h2>Register</h2></div>
                <form action="{{ route("do.register") }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name :</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="nameHelp" >
                                @error('name')
                                    <div id="nameHelp" class="form-text">{{ $message }}</div>
                                @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address :</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" placeholder="@gmail.com">
                                @error('email')
                                    <div id="emailHelp" class="form-text">{{ $message }}</div>
                                @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password :</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="min 8 karakter" >
                                @error('password')
                                    <div id="passwordHelp" class="form-text">{{ $message }}</div>
                                @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password Confirmation :</label>
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation">
                                @error('password_confirmation')
                                    <div id="passwordConfirmationHelp" class="form-text">{{ $message }}</div>
                                @enderror
                    </div>
                    <p>Sudah punya akun?<a href="{{ route('login') }}">Login</a></p>
                    <div class="mb-3 d-grid">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
