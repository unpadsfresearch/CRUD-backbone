@extends('layout.master')

@section('judul')
<h1>Film</h1>
@endsection

@section('content')
<a href="{{ route('film.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

<div class="container row mx-auto">

    @forelse ($film as $key => $value)
    <div class="card mx-4" style="width: 19rem; height: 22rem">
      <img class="card-img-top" style="object-fit: cover" height="40%" src="{{ asset('images/' . $value->poster) }}" alt="Card image">
      <div class="card-body">
        <h5 class="card-title">{{ $value->judul }}</h5><br>
        <span class="badge badge-pill badge-warning">{{$value->genre->nama}}</span>
        <p class="card-text">{{ Str::limit($value->ringkasan, 90) }}</p>
        
        <a class="btn btn-primary" href="/film/{{$value->id}}/show" role="button">Show</a>
        <a class="btn btn-warning" href="/film/{{$value->id}}/edit" role="button">Edit</a>
        
      </div>
    </div>   
  
    @empty
        <h5 class="mx-auto">Belum ada data...</h5>
    @endforelse
  
</div>

@endsection