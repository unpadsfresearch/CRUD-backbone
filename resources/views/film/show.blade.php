@extends('layout.master')

@section('judul')
<h1>Film</h1>
@endsection

@section('content')
<div class="card text-center">
    <div class="d-flex justify-content-center">
        <img src="{{ asset('images/' . $film->poster) }}" alt="gambar di sini" width="50%" height="auto">
    </div>
    
    <div class="card-header">
       Dirilis Tahun {{ $film->tahun}}
    </div>
    <div class="card-body">
      <h2 class="text-center">{{ $film->judul }}</h2>
      <p class="card-text">{{ $film->ringkasan}}</p>

      
    </div>
    <div class="card-footer text-muted">
        Data dibuat {{ $film->created_at }}
    </div>
</div>
<h5 class="text-left">Daftar Review</h5>

<!--Section Review-->

<div class="container row mx-auto">
    @foreach ($film->review as $value)

            <div class="card border-primary mx-1" style="min-width: 17rem;">
                <div class="card-header text-muted">{{ $value->created_at }}</div>
                <div class="card-body text-dark">
                <p class="card-text">{{ $value->content }}</p>
                </div>
            </div>

    @endforeach
</div>


<!--Tambah Review-->
<form action="{{ route('review.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="content">Review</label>
        <textarea type="textarea" class="form-control" name="content" id="content" placeholder="Masukkan Review"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection