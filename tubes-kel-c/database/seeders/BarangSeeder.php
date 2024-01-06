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
                ],
                [
                    'kode_barang' => 'RAZER0202',
                    'nama_barang' => 'Razer Huntsman V3 Pro Mini - 60% Analog Esports Gaming Keyboard',
                    'qty' => 50,
                    'harga' => 3099000,
                    'produk_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'FTCH0301',
                    'nama_barang' => 'Fantech One Piece ARIA XD7 MONKEY D. LUFFY Mouse Wireless Gaming',
                    'qty' => 25,
                    'harga' => 899000,
                    'produk_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'FTCH0302',
                    'nama_barang' => 'Fantech ATO GEO Deskmat MP905 GE01 Mousepad XL',
                    'qty' => 50,
                    'harga' => 899000,
                    'produk_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => '3S1101',
                    'nama_barang' => '3Second Kaos Pria Katun Lengan Pendek Logo Script OL-C361223 - Blue, S',
                    'qty' => 50,
                    'harga' => 109000,
                    'produk_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => '3S1102',
                    'nama_barang' => '3Second Celana Jogger Pria Baggy Cotton Twill Pants Drawstring C051123 - Black, S',
                    'qty' => 50,
                    'harga' => 399200,
                    'produk_id' => 4,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'ERIGO1201',
                    'nama_barang' => 'Kemeja Unisex Erigo Flannel Nimsha Black - L',
                    'qty' => 70,
                    'harga' => 99000,
                    'produk_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'ERIGO1202',
                    'nama_barang' => 'Erigo Work Shirt | Gp Series Misty Blue - XL',
                    'qty' => 70,
                    'harga' => 495000,
                    'produk_id' => 5,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'EIGER1301',
                    'nama_barang' => 'EIGER WS FLEE GLEE LS TEE - Green, L',
                    'qty' => 100,
                    'harga' => 179100,
                    'produk_id' => 6,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'EIGER1302',
                    'nama_barang' => 'EIGER WS ZENITH WARMER JACKET - Orange, XS',
                    'qty' => 100,
                    'harga' => 1304100,
                    'produk_id' => 6,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'MIE2101',
                    'nama_barang' => 'Indomie Goreng Aceh',
                    'qty' => 100,
                    'harga' => 3000,
                    'produk_id' => 7,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'MIE2102',
                    'nama_barang' => 'Indomie Goreng Rica-Rica',
                    'qty' => 100,
                    'harga' => 3000,
                    'produk_id' => 7,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'MIBO2201',
                    'nama_barang' => 'Teh Botol Sosro',
                    'qty' => 40,
                    'harga' => 2500,
                    'produk_id' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'MIBO2202',
                    'nama_barang' => 'Pulpy Orange',
                    'qty' => 40,
                    'harga' => 6000,
                    'produk_id' => 8,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'MIKA2301',
                    'nama_barang' => 'NESCAFE Kopi Rasa Ice Black 220ml',
                    'qty' => 50,
                    'harga' => 7300,
                    'produk_id' => 9,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'MIKA2302',
                    'nama_barang' => 'Coca-Cola Zero - Kemasan Kaleng 250mL',
                    'qty' => 50,
                    'harga' => 5670,
                    'produk_id' => 9,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'ADD3101',
                    'nama_barang' => 'Sepatu Sneakers Pria ADIDAS HYPERTURF HQ9943 ORIGINAL - 42',
                    'qty' => 35,
                    'harga' => 1649000,
                    'produk_id' => 10,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'ADD3102',
                    'nama_barang' => 'Adidas Samba OG White Gum (100% Authentic) - 44',
                    'qty' => 35,
                    'harga' => 2699000,
                    'produk_id' => 10,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'NIKE3201',
                    'nama_barang' => 'Sneakers N1ke Air Jordan 1 High OG Black White - 38',
                    'qty' => 45,
                    'harga' => 839000,
                    'produk_id' => 11,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'NIKE3202',
                    'nama_barang' => 'Sandal Pria Nike Offcourt Adjust Slide DQ9624-003',
                    'qty' => 45,
                    'harga' => 365400,
                    'produk_id' => 11,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'FUMA3301',
                    'nama_barang' => 'Sepatu Running Fuma Pria Wanita Terbaru , Cewek Cowok',
                    'qty' => 40,
                    'harga' => 856000,
                    'produk_id' => 12,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'FUMA3302',
                    'nama_barang' => 'Sepatu Trend Sneakers Fuma Size 3943/Sepatu Sneakers',
                    'qty' => 40,
                    'harga' => 133000,
                    'produk_id' => 12,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'PCL4101',
                    'nama_barang' => 'Pensil Faber Castell 2B',
                    'qty' => 50,
                    'harga' => 4400,
                    'produk_id' => 13,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'PCL4102',
                    'nama_barang' => 'Pensil Faber Castell HB',
                    'qty' => 50,
                    'harga' => 4400,
                    'produk_id' => 13,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'PLPN4201',
                    'nama_barang' => 'Pen Bolpen Gel JK-100 Joyko',
                    'qty' => 10,
                    'harga' => 3500,
                    'produk_id' => 14,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'PLPN4202',
                    'nama_barang' => 'Greebel Pulpen Technoline 0.5 BLACK',
                    'qty' => 10,
                    'harga' => 2000,
                    'produk_id' => 14,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'BIN4301',
                    'nama_barang' => 'BINDER POLOS EXCLUSIVE BLACK A5 DAN B5 - A5',
                    'qty' => 25,
                    'harga' => 45000,
                    'produk_id' => 15,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'kode_barang' => 'BIN4302',
                    'nama_barang' => 'Binder File Pastel A4 20 hal',
                    'qty' => 25,
                    'harga' => 110000,
                    'produk_id' => 15,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}