@extends('layouts.main')

@section('content')
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-title">
                <h4>Kategori Kajian </h4>
            </div>

            @if (session('status'))
                <div class="alert alert-success text-center text-light mt-2 mb-2" role="alert">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger text-center text-light mt-2 mb-2" role="alert">
                    <strong>{{ session('error') }}</strong>
                </div>
            @endif
    
 
            <div class="card-body">
                <a href="{{ Route('category.kajian.create') }}" class="btn btn-outline-primary btn-sm mb-3 mt-2">
                    <i class="ti-plus"></i>
                    Kategori Kajian
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Icon</th>
                                <th>Name</th>
                                <th class="text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $d)
                                <tr>
                                    <th scope="row">{{ $index  + 1 + ($data->currentPage() - 1) * $data->perPage() }}</th>  
                                    <td><img class="img-fluid" src="http://127.0.0.1:8000/storage/{{ $d->icon }}" alt=""></td>
                                    <td>{{ $d->name }}</td>
                                    <td class="text-left">
                                        <a class="btn btn-warning btn-sm text-white" href="{{ Route('category.kajian.edit', $d->id) }}">
                                            <i class="ti-pencil"></i>
                                        </a>
                                        <form action="{{ Route('category.kajian.destroy', $d->id) }}" method="POST" class="delete d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $d->id }}">
                                            <button onclick="return confirm('Hapus kategori kajian ini ?');" type="submit" class="btn btn-danger btn-sm">
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