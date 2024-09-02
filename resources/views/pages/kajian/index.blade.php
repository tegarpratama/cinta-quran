@extends('layouts.main')

@section('content')
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-title">
                <h4>Kajian </h4>
            </div>

            @if (session('status'))
                <div class="alert alert-success text-center text-light mt-2 mb-2" role="alert">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
    
 
            <div class="card-body">
                <a href="{{ Route('kajian.create') }}" class="btn btn-outline-primary btn-sm mb-3 mt-2">
                    <i class="ti-plus"></i>
                    Kajian
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 20%">Image</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Posisi</th>
                                <th class="text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $index => $d)
                                <tr>
                                    <th scope="row">{{ $index  + 1 + ($data->currentPage() - 1) * $data->perPage() }}</th>  
                                    <td>
                                        <img class="img-fluid" src="http://127.0.0.1:8000/storage/{{ $d->banner_url }}" alt="">
                                    </td>
                                    <td>{{ $d->title }}</td>
                                    <td>{{ $d->category->name }}</td>
                                    <td>{{ $d->start_date }}</td>
                                    <td>{{ $d->start_time }} - {{ $d->end_time }}</td>
                                    <td>{{ $d->position ? $d->position : '-' }}</td>
                                    <td class="text-left">
                                        <a class="btn btn-warning btn-sm text-white" href="{{ Route('kajian.edit', $d->id) }}">
                                            <i class="ti-pencil"></i>
                                        </a>
                                        <form action="{{ Route('kajian.destroy', $d->id) }}" method="POST" class="delete d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $d->id }}">
                                            <button onclick="return confirm('Hapus kajian ini ?');" type="submit" class="btn btn-danger btn-sm">
                                                <i class="ti-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3">
                    @if (count($data) > 0)
                        {{ $data->links() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection