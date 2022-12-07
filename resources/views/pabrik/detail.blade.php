@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Detail Data</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="form-label">Telpon</label>
                                <input class="form-control" value="{{ $pabrik->telpon_pabrik }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Nama Pabrik</label>
                                <input class="form-control"value="{{ $pabrik->nama_pabrik }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Keahlian</label>
                                <input class="form-control"value="{{ $pabrik->alamat_pabrik }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Telepon</label>
                                <input class="form-control" value="{{ $pabrik->email_pabrik }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Alamat</label>
                                <input class="form-control" value="{{ $pabrik->produk }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <a type="button" class="btn btn-warning" href="/pabrik/all">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div @endsection