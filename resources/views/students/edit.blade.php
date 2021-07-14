@extends('layouts_tamplete/template')

@section('title', 'Edit Data Mahasiswa')

@section('content')
<div class="example-modal">
    <div class="modal modal-primary">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center">Edit Data Mahasiswa</h4>
                </div>
                <form method="post" action="{{ url('/students/'.$student->id) }}">
                @method('patch')
                @csrf
                    <div class="modal-body">
                        <div class="form-group @error('nama') has-error @enderror">
                            <label for="inputNama">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{ $student->nama }}" id="inputNama" placeholder="Masukan Nama">
                            @error('nama')
                                    <span class="has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group @error('nim') has-error @enderror">
                            <label for="inputNim">Nim</label>
                            <input type="text" name="nim" class="form-control" value="{{ $student->nim }}" id="inputNim" placeholder="Masukan Nim">
                            @error('nim')
                                    <span class="has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group @error('email') has-error @enderror">
                            <label for="inputEmail">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $student->email }}" id="inputEmail" placeholder="Masukan Email">
                            @error('email')
                                    <span class="has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group @error('jurusan') has-error @enderror">
                        <label>Jurusan</label>
                        <select class="form-control" name="jurusan">
                            <option @if($student->jurusan == 'Teknik Komputer') selected @endif value="Teknik Komputer">Teknik Komputer</option>
                            <option @if($student->jurusan == 'Teknik Informatika') selected @endif value="Teknik Informatika">Teknik Informatika</option>
                            <option @if($student->jurusan == 'Teknik Mesin') selected @endif value="Teknik Mesin">Teknik Mesin</option>
                            <option @if($student->jurusan == 'Teknik Electronika') selected @endif value="Teknik Electronika">Teknik Electronika</option>
                            <option @if($student->jurusan == 'Perhotelan') selected @endif value="Perhotelan">Perhotelan</option>
                        </select>
                        @error('jurusan')
                                    <span class="has-error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-outline">Edit Data</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div><!-- /.example-modal -->
@endsection