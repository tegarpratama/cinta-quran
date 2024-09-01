@extends('layouts.main')

@section('content')
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-title">
                <h4>Donasi </h4>
            </div>

            @if (session('status'))
                <div class="alert alert-success text-center text-light mt-2 mb-2" role="alert">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
    
 
            <div class="card-body">
                <a href="{{ Route('donation.create') }}" class="btn btn-outline-primary btn-sm mb-3 mt-2">
                    <i class="ti-plus"></i>
                    Donasi
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th style="width: 15%">Image</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Jatuh Tempo</th>
                                <th>Maksimal</th>
                                <th class="text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $index => $d)
                                <tr>
                                    <th scope="row">{{ $index  + 1 + ($data->currentPage() - 1) * $data->perPage() }}</th>  
                                    <td>
                                        <img class="img-fluid" src="http://127.0.0.1:8000/storage/{{ $d->image_url }}" alt="">
                                    </td>
                                    <td>{{ $d->title }}</td>
                                    <td>{{ $d->category->name }}</td>
                                    <td>{{ $d->due_date }}</td>
                                    <td>{{ 'Rp ' . number_format($d->max_fund, 0, ',', '.') }}</td>
                                    <td class="text-left">
                                        <a class="btn btn-warning btn-sm text-white" href="{{ Route('donation.edit', $d->id) }}">
                                            <i class="ti-pencil"></i>
                                        </a>
                                        <form action="{{ Route('donation.destroy', $d->id) }}" method="POST" class="delete d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $d->id }}">
                                            <button onclick="return confirm('Hapus donasi ini ?');" type="submit" class="btn btn-danger btn-sm">
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