<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RequestLoans;

class RequestLoansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RequestLoans::create([
            'nip_guru' => '0101',
            'nama_guru' => 'lab1',
            'kelas'=>'11 rpl',
            'mata_pelajaran'=>'pwpb',
            'lab'=>1,
            'mulai'=>'2023-07-01 13:25:00',
            'selesai'=>'2023-07-01 14:45:00',
            'ulasan'=>'apa yaaaaaaaaaaaaa',
        ]);
    }
}
