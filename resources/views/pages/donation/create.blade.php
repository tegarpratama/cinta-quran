@extends('layouts.main')

@section('content')
    <div class="col-8">
        <div class="card">
            <div class="card-title">
                <h4>Tambah Donasi </h4>
            </div>    
 
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" action="{{ Route('donation.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Gambar</label>
                            <div class="custom-file">
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
                            <label>Jatuh Tempo</label>
                            <input type="date" class="form-control" name="due_date">
                            @error('due_date')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Maksimal Pendanaan</label>
                            <input type="text" class="form-control" name="max_fund">
                            @error('max_fund')
                                <small class="text-danger">{{ $message }}</small> <br>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection