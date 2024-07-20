@extends('layouts.template_defaulte')
@section('title', 'Tambah Barang')
@section('content')

    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Barang</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('barang.store') }}" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Nama Barang</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama_barang"
                                                class="form-control @error('nama_barang') is invalid @enderror"
                                                name="nama_barang" placeholder="Nama Barang" required>
                                            @error('nama_barang')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Stock</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="stock"
                                                class="form-control @error('stock') is invalid
                                            @enderror"
                                                name="stock" placeholder="Stock" required>
                                            @error('stock')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Keterangan</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="keterangan"
                                                class="form-control @error('keterangan') is invalid
                                            @enderror"
                                                name="keterangan" placeholder="Keterangan" required>
                                            @error('keterangan')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
