@extends('login.main')

@section('container')
<div class="pt-4 pb-2">
  <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
  <p class="text-center small">Enter your personal details to create account</p>
</div>

<form class="row g-3 needs-validation" novalidate method="POST" action="/register">
  @csrf
  <div class="col-12">
    <label for="name" class="form-label">Your Name</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
      value="{{ old('name') }}" placeholder="your Name" required>
    @error('name')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <div class="col-12">
    <label for="email" class="form-label">Your Email</label>
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
      value="{{ old('email') }}" placeholder="example@example.com" required>
    @error('email')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <div class="col-12">
    <label for="username" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
        value="{{ old('username') }}" id="username" placeholder="username" required>
    </div>
    @error('username')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <div class="col-12">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password"
      required>
    @error('password')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
      <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and
          conditions</a></label>
      <div class="invalid-feedback">You must agree before submitting.</div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary w-100" type="submit">Create Account</button>
  </div>
  <div class="col-12">
    <p class="small mb-0">Already have an account? <a href="/login">Log in</a></p>
  </div>
</form>
@endsection