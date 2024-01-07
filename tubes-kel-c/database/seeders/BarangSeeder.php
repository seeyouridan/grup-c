<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert(
            [
                [
                    'kode_barang' => 'ASUS0101',
                    'nama_barang' => 'ASUS TUF Gaming M3 Gen II Wired Gaming Mouse',
                    'qty' => 20,
                    'harga' => 369000,
                    'produk_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'ASUS0102',
                    'nama_barang' => 'ASUS ROG Chakram RGB Wireless Gaming Mouse with Qi Charging',
                    'qty' => 20,
                    'harga' => 2499000,
                    'produk_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'RAZER0201',
                    'nama_barang' => 'Razer DeathAdder V3 Pro - Red - Faker Limited Edition - Gaming Mouse',
                    'qty' => 20,
                    'harga' => 2999000,
                    'produk_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
                
            ]
        );
    }
}
