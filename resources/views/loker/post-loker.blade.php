@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between">
  <div class="pagetitle">
    <h1>Blank Page</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Blank</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <div class="d-flex wrap align-items-stretch text-center">
    <form action="/loker">
      <button type="submit" class="btn btn-primary me-2">Kembali</button>
    </form>
  </div>
</div>


<section class="section">

  <div class="d-flex justify-content-center row">
    <div class="card w-50">
      <div class="card-body">
        <h5 class="card-title">Tambah Loker</h5>

        <!-- Vertical Form -->
        <form class="row g-3" action="/loker" method="POST">
          @csrf
          <div class="col-12">
            <label for="posisi" class="form-label">Posisi</label>
            <input type="text" class="form-control" id="posisi" name="posisi" required autofocus>
          </div>
          <div class="col-12">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" required>
          </div>
          <div class="col-12">
            <label for="company_id" class="form-label">Company</label>
            <select class="form-select" required name="company_id">
              <option value="" disabled selected hidden>Pilih Perusahaan</option>
              @foreach ($company as $item)
              <option value="{{ $item->id }}" {{ (old('company_id')==$item->id ? 'selected' : '') }}>{{
                $item->name }}</option>
              @endforeach
            </select>
          </div>
          <div class=" col-12">
            <label for="apply_via" class="form-label">Apply via</label>
            <input type="text" class="form-control" id="apply_via" name="apply_via" required>
          </div>
          <div class="col-12">
            <label for="link" class="form-label">link</label>
            <input type="url" class="form-control" id="link" name="link" required>
          </div>
          <div class="col-12">
            <label for="expire" class="form-label">expire</label>
            <input type="date" class="form-control" id="expire" name="expire">
          </div>
          <div class="col-12">
            <label for="description" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" style="height: 100px" id="description" name="description" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form><!-- Vertical Form -->

      </div>
    </div>
    <p class="text-center">Coba daftarkan perusahaanmu <span><a href="/company">disini</a><span></p>
  </div>
</section>

@endsection