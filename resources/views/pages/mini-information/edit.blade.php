@extends('layouts.main')

@section('content')
    <div class="col-8">
        <div class="card">
            <div class="card-title">
                <h4>Edit Informasi Homepage </h4>
            </div>    
 
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" action="{{ Route('mini.info.update', $data->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Icon</label>
                            <input type="text" class="form-control" name="icon" value="{{ old('icon') ? old('icon') : $data->icon }}">
                            @error('icon')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                            <small><a target="_blank" class="text-primary" href="https://themify.me/themify-icons">Click here</a> for references icon</small>
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