@extends('layout.master')

@section('judul')
<h1>Genre</h1>
@endsection


@section('content')
<h2>Tambah Genre</h2>
        <form action="{{ route('genre.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Masukkan Genre Film</label>                
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Genre Baru">
            </div>
            
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
@endsection