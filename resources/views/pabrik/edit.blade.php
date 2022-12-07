@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Edit Data pabrik</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/pabrik/update/ {{ $pabrik->id }}">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Telpon</label>
                                <input class="form-control" id="telpon_pabrik" name="telpon_pabrik"
                                    value="{{ old('telpon_pabrik', $pabrik->telpon_pabrik) }}" disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama</label>
                                <input class="form-control" id="nama_pabrik"
                                    name="nama_pabrik"value="{{ old('nama_pabrik', $pabrik->nama_pabrik) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" id="alamat_pabrik"
                                name="alamat_pabrik"value="{{ old('alamat_pabrik', $pabrik->alamat_pabrik) }}" required>
                            </div>
                            <br>
                            {{-- <div class="form-group">
                                <label for="" class="form-label">Diagnosa</label>
                                <select class="form-select" name="pabrik_id">
                                    @foreach ($pabrik as $doctor)
                                        @if (old('pabrik_id', $pabrik->pabrik_id == $doctor->id))
                                            <option name="pabrik_id" value="{{ $doctor->id }}" selected>{{ $doctor->keahlian }}
                                            </option>
                                        @endif
                                        <option name="pabrik_id" value="{{ $doctor->id }}">{{ $doctor->keahlian }}</option>
                                    @endforeach
                                </select>
                                <input class="form-control"id="kode_pabrik" name="kode_pabrik" value="{{ $pabrik->pabrik->eahlian }}">
                            </div>
                            <br> --}}
                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input class="form-control" id="email_pabrik"
                                name="email_pabrik"value="{{ old('email_pabrik', $pabrik->email_pabrik) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Produk</label>
                                <input class="form-control" id="produk"
                                name="produk"value="{{ old('produk', $pabrik->produk) }}" required>
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/pabrik/all">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection