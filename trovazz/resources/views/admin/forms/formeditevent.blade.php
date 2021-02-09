@extends('admin/admin')
@section('content')
<form action="{{ route('event.update',['id' => $event->id]) }}" method="post" enctype="multipart/form-data">
    @method('put')
    {{ csrf_field() }}
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Event</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Nama Event</label>
                                    <input type="text" name="name" class="form-control" value="{{ $event->name }}">
                                    @error('name')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Deskripsi Event</label>
                                    <textarea class="form-control" rows="3" name="description" > </textarea>
                                    @error('description')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="image">Gambar event</label>
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