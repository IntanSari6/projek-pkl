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
            'nip_guru' => '0123',
            'nama_guru' => 'gatau',
            'kelas' => 'XII RPL',
            'mata_pelajaran' => 'matematika',
            'lab' => '1',
            'mulai' => '2023-09-20 14:15:00',
            'selesai' => '2023-09-20 14:30:00',
            'ulasan' => 'hallo',
            'status' => 'terima',
        ]);
    }
}
