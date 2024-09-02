@extends('layouts.main')

@section('content')
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-title">
                <h4>Edit Kajian </h4>
            </div>    
 
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" action="{{ Route('kajian.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Gambar</label>
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
                            <label>Kategori</label>
                            <select class="form-control" name="kajian_category_id">
                                @foreach ($categories as $c)
                                    <option value="{{ $c->id }}" @selected($c->id == $data->kajian_category_id)>{{ $c->name }}</option>
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
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="start_date" value="{{ old('start_date') ? old('start_date') : $data->start_date }}">
                            @error('start_date')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Waktu Mulai</label>
                            <input type="text" class="form-control" name="start_time"  value="{{ old('start_time') ? old('start_time') : $data->start_time }}">
                            @error('start_time')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Waktu Akhir</label>
                            <input type="text" class="form-control" name="end_time"  value="{{ old('end_time') ? old('end_time') : $data->end_time }}">
                            @error('end_time')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Posisi</label>
                            <select class="form-control" name="position">
                                <option value="" @selected($data->position == null)>Etc</option>
                                <option value="first" @selected($data->position == "first")>First</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection