@extends('layouts.main')

@section('content')
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-title">
                <h4>Informasi Homepage </h4>
            </div>

            @if (session('status'))
                <div class="alert alert-success text-center text-light mt-2 mb-2" role="alert">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
    
 
            <div class="card-body">
                <a href="{{ Route('mini.info.create') }}" class="btn btn-outline-primary btn-sm mb-3 mt-2">
                    <i class="ti-plus"></i>
                    Informasi Homepage
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th class="text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $d)
                                <tr>
                                    <th scope="row">{{ $index  + 1  }}</th>  
                                    <td><img class="img-fluid" src="http://127.0.0.1:8000/storage/{{ $d->icon }}" alt=""></td>
                                    <td>{{ $d->title }}</td>
                                    <td>{{ $d->description }}</td>
                                    <td class="text-left">
                                        <a class="btn btn-warning btn-sm text-white" href="{{ Route('mini.info.edit', $d->id) }}">
                                            <i class="ti-pencil"></i>
                                        </a>
                                        <form action="{{ Route('mini.info.destroy', $d->id) }}" method="POST" class="delete d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $d->id }}">
                                            <button onclick="return confirm('Hapus informasi homepage ini ?');" type="submit" class="btn btn-danger btn-sm">
                                                <i class="ti-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection