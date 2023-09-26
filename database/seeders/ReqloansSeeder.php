<?php

namespace Database\Seeders;

use App\Models\Reqloans;
use Illuminate\Database\Seeder;

class ReqloansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reqloans::create([
            'nip_teacher' => '0123',
            'teacher_name' => 'gatau',
            'class' => 'XII RPL',
            'subject' => 'matematika',
            'lab' => '1',
            'start' => '2023-09-20 14:15:00',
            'finished' => '2023-09-20 14:30:00',
            'review' => 'hallo',
            'status' => 'terima',
        ]);
    }
}
