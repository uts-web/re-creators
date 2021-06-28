@extends('layouts.pegawai')

@section('title', 'Jasa Tersedia')

@section('foto_pegawai', $pegawai['foto_pegawai'])
@section('nama_pegawai', $pegawai['nama_pegawai'])
@section('email_pegawai', $pegawai['email_pegawai'])
@section('jabatan_pegawai', $pegawai['jabatan_pegawai'])

@section('content')

<div class="col-lg-8">
    <div class="card" style="background: #f5f5f5">
            <div class="basic-form">
                    <form method="POST" action="{{ URL('pegawai/hidangan') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Nama Produk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="nama_hidangan" placeholder="Nama produk" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Jenis Produk</label>
                            <div class="col-sm-10">
                                <select name="jenis_hidangan" class="form-control">
                                    <option value="Makanan">Desain Grafis</option>
                                    <option value="Minuman">Video Editor</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Harga Produk</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="" name="harga_hidangan" placeholder="Harga produk" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-sm-2 col-form-label">Foto Produk</label>
                            <div class="col-sm-10">
                                <input type="file" name="foto_hidangan" class="form-control">
                            </div>
                        </div>
                        <div style="text-align: right;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
            </div>
    </div>
</div>
@endsection
