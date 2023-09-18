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
            'nip_guru' => '0101',
            'nama_lab' => 'lab1',
            'kelas'=>'11 rpl',
            'mata_pelajaran'=>'pwpb',
            'tanggal'=>'2023-07-01',
            'durasi'=>'10.00-10.30',
            'lab'=>'1',
            'status_peminjaman'=>'diisi',
            'ulasan'=>'apa yaaaaaaaaaaaaa',
        ]);
    }
}
