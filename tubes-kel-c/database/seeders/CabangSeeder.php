<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branches')->insert(
            [
                [
                    'manajer_id' => 2,
                    'nama_cabang' => 'Cabang A',
                    'alamat' => 'Bandung',
                    'supervisor_id' => 7,
                    'kasir_id' => 12,
                    'warehouse_id' => 17,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'manajer_id' => 3,
                    'nama_cabang' => 'Cabang B',
                    'alamat' => 'Jakarta',
                    'supervisor_id' => 8,
                    'kasir_id' => 13,
                    'warehouse_id' => 18,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'manajer_id' => 4,
                    'nama_cabang' => 'Cabang C',
                    'alamat' => 'Cianjur',
                    'supervisor_id' => 9,
                    'kasir_id' => 14,
                    'warehouse_id' => 19,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'manajer_id' => 5,
                    'nama_cabang' => 'Cabang D',
                    'alamat' => 'Bekasi',
                    'supervisor_id' => 10,
                    'kasir_id' => 15,
                    'warehouse_id' => 20,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'manajer_id' => 6,
                    'nama_cabang' => 'Cabang E',
                    'alamat' => 'Sukabumi',
                    'supervisor_id' => 11,
                    'kasir_id' => 16,
                    'warehouse_id' => 21,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
