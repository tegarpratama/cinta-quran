@extends('layouts.main')

@section('content')
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-title">
                <h4>Informasi Yayasan </h4>
            </div>

            @if (session('status'))
                <div class="alert alert-success text-center text-light mt-2 mb-2" role="alert">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
    
 
            <div class="card-body">
                <a href="{{ Route('information.edit', $data->id) }}" class="btn btn-outline-primary btn-sm mb-3 mt-2">
                    <i class="ti-pencil"></i>
                    Perbarui
                </a>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Logo</th>
                            <td><img class="img-fluid" src="http://127.0.0.1:8000/storage/{{ $data->logo }}" alt=""></td>
                        </tr>
                        <tr>
                            <th>Alamat</th>
                            <td>{{ $data->address }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $data->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $data->phone }}</td>
                        </tr>
                        <tr>
                            <th>Facebook</th>
                            <td>{{ $data->facebook }}</td>
                        </tr>
                        <tr>
                            <th>Youtube</th>
                            <td>{{ $data->youtube }}</td>
                        </tr>
                        <tr>
                            <th>Instagram</th>
                            <td>{{ $data->instagram }}</td>
                        </tr>
                        <tr>
                            <th>Linkedin</th>
                            <td>{{ $data->linkedin }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection