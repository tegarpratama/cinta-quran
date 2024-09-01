@extends('layouts.main')

@section('content')
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-title">
                <h4>Edit Informasi Homepage </h4>
            </div>    
 
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" action="{{ Route('mini.info.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Icon</label>
                            <div class="" style="width: 30%">
                                <img class="img-fluid" src="http://127.0.0.1:8000/storage/{{ $data->icon }}" alt="">
                            </div>
                            <div class="custom-file mt-3">
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
                            <input type="text" class="form-control" name="title" value="{{ old('title') ? old('title') : $data->title }}">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control" name="description" value="{{ old('description') ? old('description') : $data->description }}">
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection