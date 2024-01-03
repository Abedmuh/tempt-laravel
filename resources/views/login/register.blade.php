@extends('login.layout')

@section('container')
<h1 class="h3 mb-3 fw-normal text-center">Register</h1>

<form action="/register" method="post">
  @csrf
  <div class="form-floating">
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name"
      required value="{{ old('name') }}">
    <label for="name">Name</label>
    @error('name')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username"
      placeholder="Username" required value="{{ old('username') }}">
    <label for="username">username</label>
    @error('username')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
      placeholder="name@example.com" required value="{{ old('email') }}">
    <label for="floatingInput">Email address</label>
    @error('email')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password"
      placeholder="Password" required>
    <label for="floatingPassword">Password</label>
    @error('password')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
</form>

<small class="d-block text-center">Already Register? <a href="/login">Login Now!</a></small>
@endsection