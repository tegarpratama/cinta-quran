@extends('layouts.main')

@section('content')
    <div class="col">
        <div class="card">
            <div class="card-title">
                <h4>Program </h4>
            </div>

            @if (session('status'))
                <div class="alert alert-success text-center text-light mt-2 mb-2" role="alert">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
    
 
            <div class="card-body">
                <a href="{{ Route('program.create') }}" class="btn btn-outline-primary btn-sm mb-3 mt-2">
                    <i class="ti-plus"></i>
                    Program
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 20%">Banner</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th class="text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $d)
                                <tr>
                                    <th scope="row">{{ $index  + 1 + ($data->currentPage() - 1) * $data->perPage() }}</th>  
                                    <td>
                                        <img class="img-fluid" src="http://127.0.0.1:8000/storage/{{ $d->banner_url }}" alt="">
                                    </td>
                                    <td>{{ $d->title }}</td>
                                    <td>{{ $d->description }}</td>
                                    <td class="text-left">
                                        <a class="btn btn-warning btn-sm text-white" href="{{ Route('program.edit', $d->id) }}">
                                            <i class="ti-pencil"></i>
                                        </a>
                                        <form action="{{ Route('program.destroy', $d->id) }}" method="POST" class="delete d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $d->id }}">
                                            <button onclick="return confirm('Hapus program ini ?');" type="submit" class="btn btn-danger btn-sm">
                                                <i class="ti-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection