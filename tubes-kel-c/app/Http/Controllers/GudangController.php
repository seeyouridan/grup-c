<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Product;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['barangs'] = Barang::with('product')->get();
        return view('gudang.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = ['products' => Product::pluck('jenis_produk', 'id')];
        return view('gudang.create', $produk);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'qty' => 'required|integer',
            'harga' => 'required|numeric',
            'produk_id' => 'required|exists:products,id', // Pastikan produk_id sesuai dengan nama model produk Anda
        ]);

        // Simpan data barang baru
        $barang = Barang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'qty' => $request->qty,
            'harga' => $request->harga,
            'produk_id' => $request->produk_id,
            //Tambahkan kolom lain sesuai kebutuhan
        ]);

        // Redirect atau lakukan aksi lain setelah penyimpanan berhasil
        return redirect()->route('gudang.index')->with('success', 'Data barang berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
