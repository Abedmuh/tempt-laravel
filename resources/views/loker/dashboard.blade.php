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

  <div class="d-flex wrap align-items-stretch text-center mt-2">
    <a href="/loker/create"> Daftarkan Lokermu disni</a>
  </div>
</div>

<section class="section">
  <div class="col-12">
    <div class="card recent-sales overflow-auto">

      <div class="card-body">
        <h5 class="card-title">Recent Sales <span>| Today</span></h5>

        <table class="table table-borderless datatable">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Posisi</th>
              <th scope="col">Perusahaan</th>
              <th scope="col">Apply_via</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($lokers as $loker)
            <tr>
              <td>{{ $loker->id }}</td>
              <td>{{ $loker->posisi }}</td>
              <td>{{ $loker->company->name }}</td>
              <td>{{ $loker->apply_via }}</td>
              <td>status</td>
              <td>action</td>
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