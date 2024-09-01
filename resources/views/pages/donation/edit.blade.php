@extends('layouts.main')

@section('content')
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-title">
                <h4>Edit Donasi </h4>
            </div>    
 
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" action="{{ Route('donation.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Gambar</label>
                            <div class="" style="width: 30%">
                                <img class="img-fluid" src="http://127.0.0.1:8000/storage/{{ $data->image_url }}" alt="">
                            </div>
                            <div class="custom-file mt-3">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="image">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                            @error('image')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control" name="category_id">
                                @foreach ($categories as $c)
                                    <option value="{{ $c->id }}" @selected($c->id == $data->category_id)>{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') ? old('title') : $data->title }}">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jatuh Tempo</label>
                            <input type="date" class="form-control" name="due_date" value="{{ old('due_date') ? old('due_date') : $data->due_date }}">
                            @error('due_date')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Maksimal Pendanaan</label>
                            <input type="text" class="form-control" name="max_fund"  value="{{ old('max_fund') ? old('max_fund') : $data->max_fund }}">
                            @error('max_fund')
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