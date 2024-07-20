<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Barang;

class barangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('Admin.barang.index', compact('barangs'));
    }

    public function create()
    {
        return view('Admin.barang.create');
    }

    public function store(Request $request)
    {

        $validasi = $request->validate([
            'nama_barang' => 'string|required',
            'stock' => 'integer|required',
            'keterangan' => 'string|required'
        ]);

        Barang::create($validasi);
        Alert::success('Success', 'Berhasil menambahkan data');
        return to_route('barang.index');
    }

    public function edit(Barang $barang)
    {
        return view('Admin.barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {

        $validasi = $request->validate([
            'nama_barang' => 'string|required',
            'stock' => 'integer|required',
            'keterangan' => 'string|required'
        ]);

        $barang->update($validasi);
        Alert::success('Success', 'Berhasil edit data');
        return to_route('barang.index');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        Alert::success('Success', 'Berhasil dihapus');
        return to_route('barang.index');
    }
}
