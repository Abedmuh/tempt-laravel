@extends('login.main')

@section('container')
<div class="pt-4 pb-2">
  <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
  <p class="text-center small">Enter your username & password to login</p>
</div>

<form class="row g-3 needs-validation" action="/login" method="POST">
  @csrf
  <div class="col-12">
    <label for="email" class="form-label @error('email') is-invalid @enderror">Username</label>
    <div class="input-group has-validation">
      <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}"
        placeholder="name@example.com" autofocus required>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
  </div>

  <div class="col-12">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password" required>
  </div>

  <div class="col-12">
    <button class="btn btn-primary w-100" type="submit">Login</button>
  </div>

  <div class="col-12">
    <p class="small mb-0">Don't have account? <a href="/register">Create an account</a></p>
  </div>
</form>
@endsection