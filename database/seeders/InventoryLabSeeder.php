<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InventoryLab;

class InventoryLabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InventoryLab::create([
            'name_goods'=>"mouse",
            'item_code'=>"D001",
            'status'=>"rusak",
            'lab_id'=>1, 
        ]);
    }
}
