<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1->nbi = "146190001";
        $mhs1->nama_mhs = "Bayu";
        $mhs1->save();

        $mhs2 = new Mahasiswa();
        $mhs2->nbi = "146190002";
        $mhs2->nama_mhs = "Aji";
        $mhs2->save();

        $mhs3 = new Mahasiswa();
        $mhs3->nbi = "146190003";
        $mhs3->nama_mhs = "Pamungkas";
        $mhs3->save();

        $mhs4 = new Mahasiswa();
        $mhs4->nbi = "146190004";
        $mhs4->nama_mhs = "Uyab";
        $mhs4->save();
    }
}
