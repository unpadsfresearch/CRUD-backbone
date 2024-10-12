@extends('layout.master')

@section('judul')
<h1>Cast</h1>
@endsection

@section('content')
<a href="{{ route('cast.create') }}" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Bio</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>

            <tbody>
                @forelse ($cast as $key => $value)
                    <tr>
                        <td>{{ $key + 1 }}</th>
                        <td>{{ $value -> nama }}</td>
                        <td>{{ $value -> umur }}</td>
                        <td>{{ $value -> bio  }}</td>

                        <div class="col col-lg-2">
                            <td class="d-inline-flex">
                            
                                <a href="/cast/{{$value->id}}/show" class="btn btn-info m-1">Show</a>
                                
                                <a href="/cast/{{$value->id}}/edit" class="btn btn-primary m-1">Edit</a>
                                
                                <form action="/cast/{{$value->id}}/delete" method="POST">
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