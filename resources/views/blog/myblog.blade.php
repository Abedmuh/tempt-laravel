@extends('layouts.main')

@section('container')
<!-- Default Card -->

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
    <a href="/post/create"> Buat blog disni</a>
  </div>
</div>

@if ($posts->isEmpty())
<p class="text-center fs-4">No Blog Found.</p>
@endif
<div class="d-flex justify-content-center flex-wrap">

  @foreach ($posts as $post)

  <div class="card w-25">
    <div class="card-body">
      <h5 class="card-title">{{ $post->title }}</h5>
      <p>{{ $post->body }}</p>
    </div>
  </div><!-- End Default Card -->
  @endforeach

</div>
@endsection