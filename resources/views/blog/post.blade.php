@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-center text-justify" style="text-align: justify">
  <div class="w-75 row">
    <h1>{{ $post->title }}</h1>
    <div class="col">
      <a class="btn btn-success" href="/post" role="button">Kembali</a>
      <button type="button" class="btn btn-warning">Edit</button>
      <button type="button" class="btn btn-danger">Delete</button>
    </div>
    {{ $post->body }}
  </div>
</div>


@endsection