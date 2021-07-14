@extends('layouts_tamplete/template')

@section('title', 'Data Mahasiswa')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Mahasiswa</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                            @if(Auth::user()->level == 3)
                            <th>Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mhs as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->nim}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->jurusan}}</td>
                            @if(Auth::user()->level == 3)
                            <td>
                                <a href="{{ url('/students/'.$data->id.'/edit') }}" class="btn btn-success">EDIT</a>
                                <form class="delete-mahasiswa-form" action="{{ url('/students/'.$data->id) }}" method="post" style="display:inline;">
                                    @method('delete')
                                    @csrf
                                    <button onclick="return false" type="submit" class="btn btn-danger delete-mahasiswa">DELETE</button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                            @if(Auth::user()->level == 3)
                            <th>Aksi</th>
                            @endif
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection