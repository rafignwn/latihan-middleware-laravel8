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
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mhs as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->nim}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->jurusan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection