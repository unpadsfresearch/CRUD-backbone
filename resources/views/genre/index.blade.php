@extends('layout.master')

@section('judul')
<h1>Genre</h1>
@endsection

@section('content')
<a href="{{ route('genre.create') }}" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Nama</th>
              </tr>
            </thead>

            <tbody>
                @forelse ($genre as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</th>
                        <td>{{ $value -> nama }}</td>

                        <div class="col col-lg-2">
                            <td class="d-inline-flex">
                            
                                <a href="/genre/{{$value->id}}/show" class="btn btn-info m-1">Films</a>

                                <a href="/genre/{{$value->id}}/edit" class="btn btn-primary m-1">Edit</a>
                                
                                <form action="/genre/{{$value->id}}/delete" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger m-1" value="Delete">
                                </form>                               
                                
                            </td>
                        </div>
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No data</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>
@endsection