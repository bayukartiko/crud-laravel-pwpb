@extends('layout/main')

@section('title', 'Data Siswa')

@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">
                <h1 class="mt-3">Tabel Data Calon Siswa</h1>
                <a href="{{ url('/tambah/create') }}" class="btn btn-secondary my-3">Tambah Calon Siswa</a>

                @if(session('notif'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('notif') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <table class="table table-striped">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor PPDB</th>
                        <th scope="col">Nama Calon Siswa</th>
                        <th scope="col">Asal Sekolah</th>
                        <th scope="col">Pilihan Jurusan 1</th>
                        <th scope="col">Pilihan Jurusan 2</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $data_siswa)
                            <tr>
                                <th scope="row">1</th>
                                <th>{{ $data_siswa->no_ppdb }}</th>
                                <td>{{ $data_siswa->nama }}</td>
                                <td>{{ $data_siswa->asal_sekolah }}</td>
                                <td>{{ $data_siswa->jurusan1 }}</td>
                                <td>{{ $data_siswa->jurusan2 }}</td>
                                <td>
                                    <a href="/edit" class="btn btn-success">Ubah</a> |
                                    <a href="#" class="btn btn-danger">Hapus</a> |
                                    <a href="/detail/{{$data_siswa->id}}" class="btn btn-info">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
