@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-end">
  <!-- End Page Title -->
  <div class="d-flex wrap align-items-stretch text-center">
    <form action="/mypost">
      <button type="submit" class="btn btn-primary me-2">Kembali</button>
    </form>
  </div>
</div>


<section class="section">
  <div class="d-flex justify-content-center row">
    <div class="card w-75">
      <div class="card-body">
        <h5 class="card-title">Membuat Blog</h5>

        <!-- Vertical Form -->
        <form class="row g-3" action="/loker" method="POST">
          @csrf
          <div class="col-12">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" required autofocus>
          </div>
          <div class="col-12">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" required>
          </div>
          <div class="col-12">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" required name="category">
              <option value="" disabled selected hidden>Pilih Perusahaan</option>
              @foreach ($category as $item)
              <option value="{{ $item->id }}" {{ (old('category')==$item->id ? 'selected' : '') }}>{{
                $item->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12">
            <label for="body" class="form-label">Body</label>
            <input type="text" class="form-control" style="height: 100px" id="body" name="body" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </form><!-- Vertical Form -->

      </div>
    </div>
  </div>
</section>

@endsection