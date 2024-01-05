<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'supervisor', 'guard_name' => 'web']);

        $dataUser = [
            [
                'name' => 'Pengawas 1',
                'email' => 'pengawas1@gmail.com',
                'password' => Hash::make('pengawas123'),
            ],
            [
                'name' => 'Pengawas 2',
                'email' => 'pengawas2@gmail.com',
                'password' => Hash::make('pengawas123'),
            ],
            [
                'name' => 'Pengawas 3',
                'email' => 'pengawas3@gmail.com',
                'password' => Hash::make('pengawas123'),
            ],
            [
                'name' => 'Pengawas 4',
                'email' => 'pengawas4@gmail.com',
                'password' => Hash::make('pengawas123'),
            ],
            [
                'name' => 'Pengawas 5',
                'email' => 'pengawas5@gmail.com',
                'password' => Hash::make('pengawas123'),
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

            $user->assignRole('supervisor');
        }
    }
}
