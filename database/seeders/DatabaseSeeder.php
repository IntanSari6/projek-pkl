<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ReqloansSeeder::class,
            InventoryLabSeeder::class,
            LoansLabSeeder::class,
            LabSeeder::class,
        ]);
    }
}
