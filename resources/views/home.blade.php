@extends('layouts.main')

@section('container')
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

<section class="section">
  <div class="col-12">
    <div class="card recent-sales overflow-auto">

      <div class="card-body">
        <h5 class="card-title">All Loker dashboard</h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Posisi</th>
              <th scope="col">Perusahaan</th>
              <th scope="col">Location</th>
              <th scope="col">link</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($lokers as $item)
            <tr>
              <th>{{ $item->id }}</th>
              <td>{{ $item->posisi }}</td>
              <td>{{ $item->company->name }}</td>
              <td>{{ $item->location }}</td>
              <td>{{ $item->link }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>

      </div>

    </div>
  </div>
</section>
<!-- Recent Sales -->

<!-- End Recent Sales -->
@endsection