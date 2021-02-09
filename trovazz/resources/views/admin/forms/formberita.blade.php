@extends('admin/admin')
@section('content')
<form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Berita</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Judul Berita</label>
                                    <input type="text" name="name" class="form-control" placeholder="Masukan judul berita" value="{{old ('berita')}}">
                                    @error('name')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="date">Tanggal</label>
                                    <div class="input-group">                       
                                            <input type="date" class="form-control" name="date" id="example-date-input" >
                                    </div>
                                    @error('date')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Gambar</label>
                                    <div class="image">
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
                                <div class="form-group">
                                    <label>Isi Berita</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"></textarea>
                                        @error('description')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-primary">Tambah</button>
                    </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
</form>
@endsection