@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal">Please Login</h1>
            <form action="/login" method="POST">
                @csrf
                <div class="form-floating">
                    <input type="username" name="username" class="form-control @error('username') is-invalid @enderror"
                        id="username" placeholder="username" autofocus required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"
                        required>
                    <label for="password">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
        </main>
    </div>
</div>
@endsection