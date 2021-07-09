@extends('layouts_tamplete/template')

@section('title', 'Tambah Data Mahasiswa')

@section('content')
<div class="example-modal">
    <div class="modal modal-primary">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center">Tambah Data Mahasiswa</h4>
                </div>
                <form method="post" action="{{ url('/students') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group @error('nama') has-error @enderror">
                            <label for="inputNama">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{old('nama')}}" id="inputNama" placeholder="Masukan Nama">
                            @error('nama')
                                    <span class="has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group @error('nim') has-error @enderror">
                            <label for="inputNim">Nim</label>
                            <input type="text" name="nim" class="form-control" value="{{old('nim')}}" id="inputNim" placeholder="Masukan Nim">
                            @error('nim')
                                    <span class="has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group @error('email') has-error @enderror">
                            <label for="inputEmail">Email</label>
                            <input type="email" name="email" class="form-control" value="{{old('email')}}" id="inputEmail" placeholder="Masukan Email">
                            @error('email')
                                    <span class="has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group @error('jurusan') has-error @enderror">
                        <label>Jurusan</label>
                        <select class="form-control" name="jurusan">
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Electronika">Teknik Electronika</option>
                            <option value="Perhotelan">Perhotelan</option>
                        </select>
                        @error('jurusan')
                                    <span class="has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-outline">Tambah Data</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.example-modal -->
@endsection