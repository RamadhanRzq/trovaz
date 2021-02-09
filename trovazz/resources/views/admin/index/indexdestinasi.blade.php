@extends('admin/admin')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Destinasi</h3>
                <div class="card-tools">
                 <a href="{{ route ('destinasi.create')}}" class="btn btn-tool">
                     <i class="fa fa-plus"></i>
                     &nbsp; Add
                 </a>
             </div>
         </div>
         <div class="card-body">
            @if (Session::has('message'))
            <div id="alert-msg" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                {{ Session::get('message') }}
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>ID</th>
                                <th>Nama Destinasi</th>
                                <th>Deskripsi Destinasi</th>
                                <th>Gambar Destinasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($destinasi as $destinasis)
                            <tr>
                                <td>{{ $destinasis['id'] }}</td>
                                <td>{{ $destinasis['name'] }}</td>
                                <td>{{ $destinasis['description'] }}</td>
                                <td><img width="80px" src="{{ asset($destinasis->image) }}"></td>
                                <td class="text-center">
                                    <form method="post" action="{{route ('destinasi.destroy',['id' => $destinasis->id]) }}">
                                        @method('delete')
                                        @csrf
                                        <div class="btn-group">
                                            <a class="btn btn-success" href="{{route ('destinasi.edit',['id' => $destinasis->id]) }}">Edit</a>
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
 
@endsection