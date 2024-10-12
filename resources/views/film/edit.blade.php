@extends('layout.master')

@section('judul')
<h1>Edit Film {{ $film->judul }}</h1>
@endsection


@section('content')

        <form action="/film/{{ $film->id }}/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul" value="{{$film->judul}}">

            </div>

            <div class="form-group">
                <label for="ringkasan">Ringkasan</label>
                <textarea type="textarea" class="form-control" name="ringkasan" id="ringkasan" placeholder="Masukkan Ringkasan">{{$film->ringkasan}}</textarea>

            </div>

            <div class="form-group">
                <label for="tahun">Tahun Rilis</label>
                <input type="number" class="form-control" name="tahun" id="tahun" placeholder="Tahun Rilis" value="{{$film->tahun}}">
            </div>

            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" class="form-control" name="poster" id="poster" placeholder="Poster">
            </div>
            
            <div class="form-group">
                <label>Genre</label>
                
                <select name="genre" class="form-control" id="">
                    <option value="">{{ $film->genre->nama }}</option>
                    @foreach ($genre as $item)
                        @if ($item->id === $film->genre_id) 
                            <option value="{{$item->id}}"selected>{{$item->nama}}</option>
                        @else
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                        @endif
                            
                    @endforeach
                </select>
                
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        <form action="/film/{{$film->id}}/delete" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger mt-1" value="Delete">
        </form>
@endsection