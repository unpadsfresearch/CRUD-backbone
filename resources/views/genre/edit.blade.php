@extends('layout.master')

@section('judul')
<h1>Genre</h1>
@endsection

@section('content')
<h2>Edit Genre</h2>
        <form action="/genre/{{ $genre->id }}/update" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Genre Edit</label>
                <select name="nama" id="nama" class="form-control">
                    <option value="{{$genre->nama}}">{{$genre->nama}}</option>
                    <option value="Aksi">Aksi</option>
                    <option value="Edukasi">Edukasi</option>
                    <option value="Animasi">Animasi</option>
                    <option value="Dokumenter">Dokumenter</option>
                    <option value="Komedi">Komedi</option>

                </select>

            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
@endsection