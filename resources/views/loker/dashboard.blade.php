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
            <tr>
              <th scope="row"><a href="#">#2457</a></th>
              <td>Brandon Jacob</td>
              <td><a href="#" class="text-primary">At praesentium minu</a></td>
              <td>$64</td>
              <td><span class="badge bg-success">Approved</span></td>
              <td>Approved</span></td>
            </tr>

          </tbody>
        </table>

      </div>

    </div>
  </div>
</section>
<!-- Recent Sales -->

<!-- End Recent Sales -->
@endsection