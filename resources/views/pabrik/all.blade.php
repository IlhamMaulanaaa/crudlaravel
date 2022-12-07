@extends('layout.main')
@section('container')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h1 align="center" class=" text-light">Data pabrik</h1>
                @if (session()->has('Successfully'))
                    <div class="alert alert-success col-lg-12" role="alert">
                        {{ session('Successfully') }}
                    </div>
                @endif
                <div class="">
                    <div class="card-body">
                        <a type="button" class="btn btn-primary float-end" href="create">Tambah Data Baru</a>
                        <br><br>
                        <table class="table table-dark table-hover">
                            <thead>
                                <tr align="center" class="table-active">

                                    <th scope="col" class="text-start">id</th>
                                    <th scope="col" class="text-start">telpon</th>
                                    <th scope="col" class="text-start">nama</th>
                                    <th scope="col" class="text-start">alamat</th>
                                    <th scope="col" class="text-start">email</th>
                                    <th scope="col" class="text-start">produk</th>
                                    <th scope="col">Aksi</th>
                                    <!-- <th scope="col">Tanggal Lahir</th>
                                                                    <th scope="col">Foto</th>
                                                                    <th scope="col">Aksi</th> -->

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_pabrik as $pabrik)
                                    <tr align="center">
                                        <td><?= $pabrik->id ?></td>
                                        <td class="text-start"><?= $pabrik->telpon_pabrik ?></td>
                                        <td class="text-start"><?= $pabrik->nama_pabrik?></td>
                                        <td class="text-start"><?= $pabrik->alamat_pabrik?></td>
                                        <td class="text-start"><?= $pabrik->email_pabrik?></td>
                                        <td class="text-start"><?= $pabrik->produk?></td>
                                        <td>
                                            <a type="button" class="btn btn-warning"
                                                href="detail/{{ $pabrik->id }}">Detail
                                                Page</a>
                                            <a type="button" class="btn btn-primary" href="edit/{{ $pabrik->id }}">Edit
                                                Page</a>
                                            <form action="/pabrik/delete/{{ $pabrik->id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger"
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