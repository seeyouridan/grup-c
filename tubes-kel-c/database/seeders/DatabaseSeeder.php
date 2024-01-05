<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            OwnerSeeder::class,
            ManagerSeeder::class,
            SupervisorSeeder::class,
            KasirSeeder::class,
            GudangSeeder::class,
            CabangSeeder::class,
            CategoriesSeeder::class,
            ProductSeeder::class,
            BarangSeeder::class,
        ]);
    }
}
