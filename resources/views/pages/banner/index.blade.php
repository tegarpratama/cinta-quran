@extends('layouts.main')

@section('content')
    <div class="col-8">
        <div class="card">
            <div class="card-title">
                <h4>Banner Homepage </h4>
            </div>

            @if (session('status'))
                <div class="alert alert-success text-center text-light mt-2 mb-2" role="alert">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
    
 
            <div class="card-body">
                <a href="{{ Route('banner.create') }}" class="btn btn-outline-primary btn-sm mb-3 mt-2">
                    <i class="ti-plus"></i>
                    Banner Homepage
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 2%">#</th>
                                <th style="width: 25%">Banner Image</th>
                                <th style="width: 5%" class="text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $d)
                                <tr>
                                    <th scope="row">{{ $index  + 1 + ($data->currentPage() - 1) * $data->perPage() }}</th>  
                                    <td>
                                        <img class="img-fluid" src="http://127.0.0.1:8000/storage/{{ $d->image_url }}" alt="">
                                    </td>
                                    <td class="text-left">
                                        <form action="{{ Route('banner.destroy', $d->id) }}" method="POST" class="delete d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $d->id }}">
                                            <button onclick="return confirm('Hapus banner homepage ini ?');" type="submit" class="btn btn-danger btn-sm">
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