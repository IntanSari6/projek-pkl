<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lab;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lab::create([
            'lab_name' => 'lab 1',
            'color' => 'danger',
        ]);
    }
}
