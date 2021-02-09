@extends('admin/admin')
@section('content')
<form action="{{ route('berita.update',['id' => $berita->id]) }}" method="post" enctype="multipart/form-data"> 
    @method('put')
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
                                    <input type="text" name="name" class="form-control" placeholder="Masukan berita" value="{{ $berita->name }}">
                                    @error('name')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="date">Tanggal</label>
                                    <div class="input-group">                       
                                        <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                            <input class="form-control" type="date" value="mm/dd/yy" id="example-date-input" name="date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Gambar">Gambar</label>
                                    <div class="Gambar">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Isi Berita</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn-primary">Simpan</button>
                    </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
</form>
@endsection