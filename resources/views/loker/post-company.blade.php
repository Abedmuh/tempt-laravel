@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-center">
  <div class="card w-50">
    <div class="card-body">
      <h5 class="card-title">Vertical Form</h5>

      <!-- Vertical Form -->
      <form class="row g-3">
        @csrf
        <div class="col-12">
          <label for="posisi" class="form-label">Posisi</label>
          <input type="text" class="form-control" id="posisi">
        </div>
        <div class="col-12">
          <label for="location" class="form-label">Location</label>
          <input type="text" class="form-control" id="location">
        </div>
        <div class="col-12">
          <label for="company" class="form-label">Company</label>
          <select class="form-select" aria-label="Default select example">
            <option selected>Pilih Perusahaan</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <div class="col-12">
          <label for="description" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" id="description">
        </div>
        <div class="col-12">
          <label for="apply_via" class="form-label">Apply via</label>
          <input type="text" class="form-control" id="apply_via">
        </div>
        <div class="col-12">
          <label for="link" class="form-label">link</label>
          <input type="url" class="form-control" id="link">
        </div>
        <div class="col-12">
          <label for="date" class="form-label">expire</label>
          <input type="date" class="form-control" id="date">
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