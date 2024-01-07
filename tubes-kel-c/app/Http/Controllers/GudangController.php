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
            'kode_barang' => 'required|string|max:10',
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

        $notificaton = array(
            'message' => 'Data barang berhasil disimpan',
            'alert-type' => 'warning'

        );

        // Redirect atau lakukan aksi lain setelah penyimpanan berhasil
        return redirect()->route('gudang.index')->with($notificaton);
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

        $barang = Barang::findOrFail($id);
        return view('gudang.edit', compact(['barang']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = Barang::findOrFail($id);
<<<<<<< HEAD
        $barang->update($request->except(['_token', 'submit']));
        return redirect()->route('gudang.index')->with('success', 'Data barang berhasil diupdate.');
=======
        $barang->update($request->except(['_token','submit']));
        $notificaton = array(
            'message' => 'Data barang berhasil diupdate',
            'alert-type' => 'warning'

        );
        return redirect()->route('gudang.index')->with($notificaton);
>>>>>>> 7b8ec1d0c17bb2df09b244f5fe33af9eaece6390
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        $notificaton = array(
            'message' => 'Buku telah berhasil dihapus',
            'alert-type' => 'warning'
        );

        return redirect()->route('barang')->with($notificaton);
    }
}
