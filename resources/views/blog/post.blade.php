@extends('layouts.main')

@section('container')
<div class="d-flex justify-content-center text-justify" style="text-align: justify">
  <div class="w-75 row">
    <h1>{{ $post->title }}</h1>
    <div class="col">
      <a class="btn btn-success" href="/post" role="button">Kembali</a>
      <a class="btn btn-warning" href="/post/{{ $post->id }}/edit" role="button">Edit</a>
      <form action="/post/{{ $post->slug }}" method="POST" class="d-inline">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </div>
    {{ $post->body }}
  </div>
</div>


@endsection