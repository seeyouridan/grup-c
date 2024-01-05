<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(
            [
                [
                    'jenis_produk' => 'Asus',
                    'kategori_id' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Razer',
                    'kategori_id' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Fantech',
                    'kategori_id' => '1',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => '3Second',
                    'kategori_id' => '2',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Erigo',
                    'kategori_id' => '2',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Eiger',
                    'kategori_id' => '2',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Mie Instan',
                    'kategori_id' => '3',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Minuman Botol',
                    'kategori_id' => '3',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Minuman Kaleng',
                    'kategori_id' => '3',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Adidas',
                    'kategori_id' => '4',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Nike',
                    'kategori_id' => '4',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Fuma',
                    'kategori_id' => '4',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Pensil',
                    'kategori_id' => '5',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Pulpen',
                    'kategori_id' => '5',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'jenis_produk' => 'Binder',
                    'kategori_id' => '5',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
