@extends('admin/admin')
@section('content')
<form action="{{ route('penginapan.update',['id' => $penginapan->id]) }}" method="post" enctype="multipart/form-data">
    @method('put')
    {{ csrf_field() }}
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Penginapan</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Nama Penginapan</label>
                                    <input type="text" name="name" class="form-control" value="{{ $penginapan->name }}">
                                    @error('name')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="price">Harga Penginapan</label>
                                    <input type="number" name="price" class="form-control" placeholder="Masukan harga penginapan per malam..." value="{{$penginapan->price}}">
                                    @error('hargapenginapan')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Deskripsi Penginapan</label>
                                    <textarea class="form-control" rows="3" name="description" > </textarea>
                                    @error('description')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Gambar Penginapan</label>
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
                                <button type="submit" class="btn-primary">Simpan</button>
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