@extends('admin/admin')
@section('content')
@if (session('message'))
    <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
<form action="{{ route('destinasi.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Destinasi</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Nama Destinasi</label>
                                    <input type="text" name="name" class="form-control" placeholder="Masukan nama destinasi..." value="{{old ('name')}}">
                                    @error('name')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea class="form-control" rows="3" name="description" placeholder="Masukan deskripsi destinasi..." value="{{old ('name')}}"> </textarea>
                                    @error('description')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    <div class="Gambar">
                                        <div class="custom-file">
                                            <input type="file" class="form-control" name="image" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        </div>
                                    @error('image')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                </div>
                                <button type="submit" class="btn-primary">Tambah</button>
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
</form>
@endsection