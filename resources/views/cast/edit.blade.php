@extends('layout.master')

@section('judul')
<h1>Cast</h1>
@endsection

@section('content')
<h2>Edit Data</h2>
        <form action="/cast/{{ $cast->id }}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="{{$cast->nama}}" placeholder="Masukkan Nama">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="number" class="form-control" name="umur" id="umur" value="{{$cast->umur}}" placeholder="Masukkan Umur">
                @error('body')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="bio">Bio</label>
                <input type="text" class="form-control" name="bio" id="bio" value="{{$cast->bio}}" placeholder="Masukkan Bio">
                @error('body')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
@endsection