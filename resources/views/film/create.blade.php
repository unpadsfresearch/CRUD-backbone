@extends('layout.master')

@section('judul')
<h1>Tambah Film</h1>
@endsection


@section('content')

        <form action="{{ route('film.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">

            </div>

            <div class="form-group">
                <label for="ringkasan">Ringkasan</label>
                <textarea type="textarea" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan Ringkasan"></textarea>

            </div>

            <div class="form-group">
                <label for="tahun">Tahun Rilis</label>
                <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Tahun Rilis">
            </div>

            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" class="form-control" name="poster" id="poster" placeholder="Poster">
            </div>
            
            <div class="form-group">
                <label>Genre</label>
                <select name="genre" class="form-control" id="">
                        <option value="">Pilih Genre</option>
                    @foreach ($genre as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                    @endforeach
                </select>


            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
@endsection