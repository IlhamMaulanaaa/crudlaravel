
@extends('layout.main')
@section('container')
    <br>
    <div class="container">
        <div class="row">
            @if (session()->has('Successfully'))
                    <div class="alert alert-success col-lg-12" role="alert">
                        {{ session('Successfully') }}
                    </div>
                @endif
            <div class="col-ad-12">
                <h1 align="center" class=" text-light">Data Obat</h1>
                <div class="">
                    <div class="card-body">
                        <a type="button" class="btn btn-primary float-end" href="create">Tambah Data Baru</a>
                        <br><br>
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr align="center" class="table-active">
                                    <th scope="col" class="text-start">id</th>
                                    <th scope="col" class="text-start">merek</th>
                                    <th scope="col" class="text-start">nama</th>
                                    <th scope="col" class="text-start">tanggal kadaluarsa</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_obat as $obat)
                                    <tr align="center">
                                        <td class="align-middle"><?= $obat->id ?></td>
                                        <td class="text-start align-middle"><?= $obat->merek_obat ?></td>
                                        <td class="text-start align-middle"><?= $obat->nama_pabrik ?></td>
                                        <td class="text-start align-middle"><?= $obat->tanggal_kadaluarsa ?></td>
                                        <td class="text-start">
                                            <a type="button" class="btn btn-outline-warning"
                                                href="detail/{{ $obat->id }}">Detail
                                                Data</a>
                                            <a type="button" class="btn btn-outline-primary" href="edit/{{ $obat->id }}">Edit
                                                Data</a>
                                            <form action="/obat/delete/{{ $obat->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-outline-danger"
                                                    onclick="return  confirm('Apakah Anda Yakin') ">Hapus</button>
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
@endsection