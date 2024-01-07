<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'manajer', 'guard_name' => 'web']);

        $dataUser = [
            [
                'name' => 'Rafly',
                'email' => 'rafly@gmail.com',
                'password' => Hash::make('rafly123'),
            ],
            [
                'name' => 'Resti',
                'email' => 'resti@gmail.com',
                'password' => Hash::make('resti123'),
            ],
            [
                'name' => 'Ziddan',
                'email' => 'ziddan@gmail.com',
                'password' => Hash::make('ziddan123'),
            ],
            [
                'name' => 'Nabillah',
                'email' => 'nabillah@gmail.com',
                'password' => Hash::make('nabillah123'),
            ],
            [
                'name' => 'Melda',
                'email' => 'melda@gmail.com',
                'password' => Hash::make('melda123'),
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

            $user->assignRole('manajer');
        }
    }
}
