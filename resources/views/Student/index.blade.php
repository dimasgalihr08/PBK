@extends ('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')


    <div class="container">
        <div clas="row">
            <div class="col-10">
    <h1 class="mt-3">Daftar Mahasiswa</h1>

    <div class="panel-body">
                <form action="{{url('create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Tambah Baru" class="btn btn-success btn-sm">
                    </div>

    <table class="table">
        <thead class="thead-dark">
            <th scope="col">#</th>
            <th scope="col">Nim</th>
            <th scope="col">Nama</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
        </thead>
        <tbody>

            @foreach ( $mahasiswa as $mhs )           
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->jurusan }}</td>
                <td>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                    <a href="" class="badge badge-warning">detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
     </div>
        </div>
            </div>
@endsection