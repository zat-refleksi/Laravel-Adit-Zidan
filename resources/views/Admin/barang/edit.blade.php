@extends('layouts.template_defaulte')
@section('title', 'Update Barang')
@section('content')

    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">update Barang</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('barang.update', $barang->id) }}"
                                method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Nama Barang</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="nama_barang"
                                                class="form-control @error('nama_barang') is invalid @enderror"
                                                name="nama_barang" placeholder="Nama Barang"
                                                value="{{ old('nama_barang') ?? $barang->nama_barang }}" required>
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
                                                name="stock" placeholder="Stock"
                                                value="{{ old('stock') ?? $barang->stock }}" required>
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
                                                name="keterangan" placeholder="Keterangan"
                                                value="{{ old('keterangan') ?? $barang->keterangan }}" required>
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
