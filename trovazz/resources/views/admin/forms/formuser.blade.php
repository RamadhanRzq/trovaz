@extends('admin/admin')
@section('content')
@if (session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
     </div>
  @endif
<form action="{{ route('user.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah User</h3>
                    </div>
                    <div class="card-body">
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Masukan Nama" value="{{old ('name')}}">
                                    @error('name')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Masukan Email" value="{{old ('email')}}">
                                    @error('email')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukan Password" value="{{old ('password')}}">
                                    @error('password')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="is_admin">Is_Admin</label>
                                    <select name="is_admin" class="form-control">
                                        <option value=""></option>
                                        @foreach($is_admin as $admin)
                                        <option value="{{ $admin }}" {{ (old ('is_admin') == $admin ) ? 'selected' : '' }}>{{ $admin }}</option>
                                        @endforeach
                                    @error('is_admin')
                                        <div class="text-danger">
                                            {{ $message}}
                                        </div>
                                    @enderror
                                    </select>
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