@extends('admin/admin')
@section('content')
<form action="{{ route('penginapan.store') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Penginapan</h3>
                    </div>
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Nama Penginapan</label>
                                    <input type="text" name="name" class="form-control" placeholder="Masukan nama penginapan..." value="{{old ('destinasi')}}">
                                    @error('penginapan')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="price">Harga Penginapan</label>
                                    <input type="number" name="price" class="form-control" placeholder="Masukan harga penginapan per malam..." value="{{old ('destinasi')}}">
                                    @error('hargapenginapan')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                        <label>Deskripsi</label>
                                            <textarea class="form-control" name="description" rows="3" placeholder="Masukan deskripsi penginapan..."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Gambar">Gambar</label>
                                    <div class="Gambar">
                                    <div class="custom-file">
                                        <input type="file" class="form-control" name="image" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <!-- <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div> -->
                                    </div>
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