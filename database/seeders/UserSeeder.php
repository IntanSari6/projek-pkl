<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Intan',
            'email' => 'intan@gmail.com',
            'password' => bcrypt('12345'),
            'nip' => '1001',
            'subjects' => 'pbo',
            'gender' => 'Perempuan',
            'is_admin' => '1',
            'image' => 'intann.png'
        ]);

        // User::create([
        //     'name' => 'Iras',
        //     'email' => 'sari@gmail.com',
        //     'password' => bcrypt('12345'),
        //     'nip' => '7890',
        //     'subjects' => 'pbo',
        //     'gender' => 'Perempuan',
        //     'image' => 'intann.png'
        // ]);
    }
}
