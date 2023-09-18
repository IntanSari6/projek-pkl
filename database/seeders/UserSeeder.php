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
            'name' => 'intan',
            'email' => 'intan@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        User::create([
            'name' => 'iras',
            'email' => 'sari@gmail.com',
            'password' => bcrypt('12345'),

        ]);
    }
}
