@extends('layout/main')

@section('title', 'Detail Siswa')

@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h1 class="mt-3">Form Detail Calon Siswa</h1>
                <fieldset disabled="disabled">
                    <div class="form-group row">
                        <label for="inputNama3" class="col-sm-2 col-form-label">No PPDB</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputNama3" value="{{$cRUD_model->no_ppdb}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNama3" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputNama3" value="{{$cRUD_model->nama}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNama3" class="col-sm-2 col-form-label">Asal Sekolah</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputNama3" value="{{$cRUD_model->asal_sekolah}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNama3" class="col-sm-2 col-form-label">Pilihan Jurusan 1</label>
                        <div class="col-sm-10">
                          {{-- <input type="text" class="form-control" id="inputNama3" value="{{$cRUD_model->asal_sekolah}}"> --}}
                            <select name="" id="" class="form-control">
                              <option value="{{$cRUD_model->jurusan1}}">{{$cRUD_model->jurusan1}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNama3" class="col-sm-2 col-form-label">Pilihan Jurusan 2</label>
                        <div class="col-sm-10">
                          {{-- <input type="text" class="form-control" id="inputNama3" value="{{$cRUD_model->asal_sekolah}}"> --}}
                            <select name="" id="" class="form-control">
                              <option value="{{$cRUD_model->jurusan2}}">{{$cRUD_model->jurusan2}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNama3" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <textarea name="" id="" cols="30" rows="5" class="form-control">{{$cRUD_model->alamat}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNama3" class="col-sm-2 col-form-label">No HP</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="inputNama3" value="{{$cRUD_model->no_hp}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNama3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputNama3" value="{{$cRUD_model->email}}">
                        </div>
                    </div>
                </fieldset>
                <a href="{{ url('/tampil') }}" class="btn btn-primary">Mengerti</a>
            </div>
        </div>
    </div>
@endsection
