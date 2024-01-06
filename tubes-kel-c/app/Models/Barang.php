<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = ['kode_barang', 'nama_barang', 'qty', 'harga', 'produk_id'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'produk_id');
    }
}
