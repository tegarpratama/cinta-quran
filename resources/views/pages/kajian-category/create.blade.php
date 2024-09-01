@extends('layouts.main')

@section('content')
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-title">
                <h4>Tambah Kategori Kajian </h4>
            </div>    
 
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" action="{{ Route('category.kajian.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Icon</label>
                            <input type="text" class="form-control" name="icon">
                            @error('icon')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                            <small><a target="_blank" class="text-primary" href="https://themify.me/themify-icons">Click here</a> for references icon</small>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection