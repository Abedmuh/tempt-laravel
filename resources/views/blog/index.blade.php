@extends('layouts.main')

@section('container')
<!-- Default Card -->

<div class="pagetitle">
  <h1>Blank Page</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Blog</li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div>
<!-- End Page Title -->

@if ($posts->isEmpty())
<p class="text-center fs-4">No Blog Found.</p>
@endif
<div class="d-flex justify-content-center flex-wrap">

  @foreach ($posts as $post)

  <div class="card w-25">
    <div class="card-body">
      <h5 class="card-title">{{ $post->title }}</h5>
      <p>{{ $post->excerpt }}</p>
    </div>
  </div><!-- End Default Card -->
  @endforeach

</div>
@endsection