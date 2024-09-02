@extends('layouts.main')

@section('content')
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-title">
                <h4>Tambah Kajian </h4>
            </div>    
 
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" action="{{ Route('kajian.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Gambar</label>
                            <div class="custom-file">
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
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="title">
                            @error('title')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="start_date">
                            @error('start_date')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Waktu Mulai</label>
                            <input type="time" class="form-control" name="start_time">
                            @error('start_time')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Waktu Akhir</label>
                            <input type="time" class="form-control" name="end_time">
                            @error('end_time')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Posisi</label>
                            <select class="form-control" name="position">
                                <option value="">Etc</option>
                                <option value="first">First</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection