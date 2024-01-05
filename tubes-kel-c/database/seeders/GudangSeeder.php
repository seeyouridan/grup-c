<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'gudang', 'guard_name' => 'web']);

        $dataUser = [
            [
                'name' => 'Pegawai 1',
                'email' => 'pegawai1@gmail.com',
                'password' => Hash::make('gudang123'),
            ],
            [
                'name' => 'Pegawai 2',
                'email' => 'pegawai2@gmail.com',
                'password' => Hash::make('gudang123'),
            ],
            [
                'name' => 'Pegawai 3',
                'email' => 'pegawai3@gmail.com',
                'password' => Hash::make('gudang123'),
            ],
            [
                'name' => 'Pegawai 4',
                'email' => 'pegawai4@gmail.com',
                'password' => Hash::make('gudang123'),
            ],
            [
                'name' => 'Pegawai 5',
                'email' => 'pegawai5@gmail.com',
                'password' => Hash::make('gudang123'),
            ],
        ];

        foreach ($dataUser as $data) {
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => $data['password'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $user->assignRole('gudang');
        }
    }
}
