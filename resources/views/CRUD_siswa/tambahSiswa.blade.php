@extends('layout/main')

@section('title', 'Tambah Siswa')

@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h1 class="mt-3">Form Tambah Calon Siswa</h1>
                <form method="POST" action="/tambah">
                    @csrf
                    <div class="form-group row">
                        <label for="ppdb" class="col-sm-2 col-form-label">No PPDB</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control @error('no_ppdb') is-invalid @enderror" id="ppdb" name="no_ppdb" placeholder="masukkan nomor PPDB">
                          @error('no_ppdb')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control  @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="masukkan nama calon siswa">
                          @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control  @error('asal_sekolah') is-invalid @enderror" id="sekolah" name="asal_sekolah" placeholder="masukkan asal sekolah calon siswa">
                          @error('asal_sekolah')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jurusan1" class="col-sm-2 col-form-label">Pilihan Jurusan 1</label>
                        <div class="col-sm-10">
                            <select name="jurusan1" id="jurusan1" class="form-control  @error('jurusan1') is-invalid @enderror">
                              <option value="BC">Broadcast</option>
                              <option value="MM">Multimedia</option>
                              <option value="RPL">Rekayasa Perangkat Lunak</option>
                              <option value="TKJ">Teknik Komputer dan Jaringan</option>
                              <option value="TEI">Teknik Elektronika Industri</option>
                            </select>
                            @error('jurusan1')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jurusan2" class="col-sm-2 col-form-label">Pilihan Jurusan 2</label>
                        <div class="col-sm-10">
                            <select name="jurusan2" id="jurusan2" class="form-control  @error('jurusan2') is-invalid @enderror">
                                <option value="BC">Broadcast</option>
                                <option value="MM">Multimedia</option>
                                <option value="RPL">Rekayasa Perangkat Lunak</option>
                                <option value="TKJ">Teknik Komputer dan Jaringan</option>
                                <option value="TEI">Teknik Elektronika Industri</option>
                            </select>
                            @error('jurusan2')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control  @error('alamat') is-invalid @enderror" placeholder="masukkan alamat"></textarea>
                          @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control  @error('no_hp') is-invalid @enderror" id="nohp" name="no_hp" placeholder="masukkan nomor hp calon siswa">
                          @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="masukkan alamat email calon siswa">
                          @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <a href="{{ url('/tampil') }}" class="btn btn-danger">Batal</a>
                    <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
@endsection
