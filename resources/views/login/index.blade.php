@extends('login.layout')

@section('container')
<h1 class="h3 mb-3 fw-normal text-center">Please Log in for access</h1>

<form action="/login" method="POST">
  @csrf
  <div class="form-floating">
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
      placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
    <label for="email">Email address</label>
    @error('email')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="form-floating">
    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
    <label for="password">Password</label>
  </div>

  <button class="btn btn-primary w-100 py-2" type="submit">Log in</button>
</form>

<small class="d-block text-center">Not Register? <a href="/register"> Register Now!</a></small>
@endsection