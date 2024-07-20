@extends('layouts.template_defaulte')
@section('title', 'Halaman Table Barang')
@section('content')
    <!-- Borderless table start -->
    @include('sweetalert::alert')
    <section class="section">
        <div class="row" id="table-borderless">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Barang</h4>
                    </div>
                    <div class="card-content">
                        <!-- table with no border -->
                        <div class="my-4">
                            <a href="{{ route('barang.create') }}" class="btn btn-success">Tambah Barang</a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-borderless mb-0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Stock</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barangs as $barang)
                                        <tr>
                                            <td class="text-bold-500">{{ $loop->iteration }}</td>
                                            <td>{{ $barang->nama_barang }}</td>
                                            <td>{{ $barang->stock }}</td>
                                            <td>{{ $barang->keterangan }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('barang.edit', $barang->id) }}"
                                                        class="btn btn-success show_confirm"
                                                        style="margin-right: 5px">Update</a>
                                                    <form action="{{ route('barang.destroy', $barang->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger" onclick="deleteConfirm(event)">
                                                            {{ __('Delete') }}
                                                        </button>
                                                    </form>
                                                </div>
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
    </section>
    <!-- Borderless table end -->
    <script>
        window.deleteConfirm = function(e) {
            e.preventDefault();
            var form = e.target.form;
            swal({
                    title: " Apakah Anda Yakin?",
                    text: "Data Yang Dihapus Tidak Akan Kembali Lagi.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        }
    </script>

@endsection
