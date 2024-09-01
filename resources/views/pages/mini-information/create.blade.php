@extends('layouts.main')

@section('content')
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-title">
                <h4>Tambah Informasi Homepage </h4>
            </div>    
 
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" action="{{ Route('mini.info.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Icon</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="icon">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                            @error('icon')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                            <small><a target="_blank" class="text-primary" href="https://boxicons.com/">Click here</a> for references icon</small>
                        </div>
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="title">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control" name="description">
                            @error('description')
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