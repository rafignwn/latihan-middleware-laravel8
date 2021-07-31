@extends('layouts_tamplete/template')

@section('title', 'Daftar Mahasiswa')

@section('content')
<div class="row">
    <div class="col-xs-12" style="margin-bottom: 10px">
        <a href="/students/print" target="_blank" class="btn btn-primary">Print data mahasiswa</a>
    </div>
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
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
                                    <form id="delete-mahasiswa-form-{{ $data->id }}" action="{{ url('/students/'.$data->id) }}" method="post" style="display:inline;">
                                        @method('delete')
                                        @csrf
                                        <button onclick="return false" data-id="{{ $data->id }}" type="submit" class="btn btn-danger delete-mahasiswa">DELETE</button>
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