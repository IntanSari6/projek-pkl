<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LoansLab;

class LoansLabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LoansLab::create([
            'nip_teacher' => '0101',
            'lab_name' => 'lab1',
            'class'=>'11 rpl',
            'subjects'=>'pwpb',
            'date'=>'2023-07-01',
            'duration'=>'10.00-10.30',
            'lab'=>'1',
            'loan_status'=>'diisi',
            'review'=>'apa yaaaaaaaaaaaaa',
        ]);
    }
}
