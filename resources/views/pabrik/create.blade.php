@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Tambah Data pabrik</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/pabrik/add">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Telpon</label>
                                <input type="number" class="form-control" id="telpon_pabrik" name="telpon_pabrik"
                                    value="{{ old('telpon_pabrik') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama Pabrik</label>
                                <input class="form-control" id="nama_pabrik"
                                    name="nama_pabrik"value="{{ old('nama_pabrik') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" id="alamat_pabrik"
                                    name="alamat_pabrik"value="{{ old('alamat_pabrik') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input class="form-control" id="email_pabrik" name="email_pabrik"
                                    value="{{ old('email_pabrik') }}">
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Produk</label>
                                <input class="form-control" id="produk" name="produk"
                                    value="{{ old('produk') }}">
                            </div>
                            <br>
                            {{-- <div class="form-group">
                                <label for="" class="form-label">Diagnosa</label>
                                <select class="form-select" name="dokter_id" id="dokter_id">
                                    @foreach ($dokter as $doctor)
                                        <option value="{{ $doctor->id }}">{{ $doctor->keahlian }}</option>
                                    @endforeach
                                </select>
                                <input doctor="form-control"id="kode_dokter" name="kode_dokter" value="{{ $Dokter->kelas->kelas }}">
                            </div>
                            <br> --}}
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" id="alamat" name="alamat"value="{{ old('alamat') }}">
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/dokter/all">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection