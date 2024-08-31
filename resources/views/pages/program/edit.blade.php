@extends('layouts.main')

@section('content')
    <div class="col-8">
        <div class="card">
            <div class="card-title">
                <h4>Edit Program </h4>
            </div>    
 
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" action="{{ Route('program.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Banner</label>
                            <div class="" style="width: 30%">
                                <img class="img-fluid" src="http://127.0.0.1:8000/storage/{{ $data->banner_url }}" alt="">
                            </div>
                            <div class="custom-file mt-3">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="banner">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                            @error('banner')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') ? old('title') : $data->title }}">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control" name="description" value="{{ old('description') ? old('description') : $data->description }}">
                            @error('description')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection