@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-center">
  <div class="card w-50">
    <div class="card-body">
      <h5 class="card-title">Post your Company</h5>

      <!-- Vertical Form -->
      <form class="row g-3" action="/company" method="POST">
        @csrf
        <div class="col-12">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" required autofocus>
        </div>
        <div class="col-12">
          <label for="category" class="form-label">Kategori</label>
          <input type="link" class="form-control" id="category" name="category" required>
        </div>
        <div class="col-12">
          <label for="address" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="col-12">
          <label for="maps" class="form-label">Maps</label>
          <input type="link" class="form-control" name="maps" placeholder="https:/maps.google.com" id="maps" required>
        </div>
        <div class="col-12">
          <label for="description" class="form-label">Deskripsi</label>
          <input type="text" style="height: 100px" class="form-control" id="description" name="description">
        </div>
        <div class="col-12">
          <label for="link" class="form-label">Portofolio</label>
          <input type="link" class="form-control" id="link" name="link">
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>
</div>

@endsection