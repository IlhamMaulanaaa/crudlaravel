<?php

namespace Database\Seeders;
use App\Models\Pabrik;
use App\Models\Obat;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Pabrik::factory(10)->create();

        Obat::create([
            'merek_obat' => 'panadol',
            'nama_pabrik' => ' PT Glaxo Wellcome Indonesia',
            'tanggal_kadaluarsa' => '17/05/2023',
        ]);

        Obat::create([
            'merek_obat' => 'paramex',
            'nama_pabrik' => 'PT. Konimex',
            'tanggal_kadaluarsa' => '17/05/2023',
        ]);

        Obat::create([
            'merek_obat' => 'oskadon',
            'nama_pabrik' => 'PT Supra Ferbindo Farma',
            'tanggal_kadaluarsa' => '17/05/2023',
        ]);

        Obat::create([
            'merek_obat' => 'promag',
            'nama_pabrik' => 'Kalbe Farma',
            'tanggal_kadaluarsa' => '17/05/2023',
        ]);

        Obat::create([
            'merek_obat' => 'Rheumacyl ',
            'nama_pabrik' => 'PT. Tempo Scan Pacific',
            'tanggal_kadaluarsa' => '17/05/2023',
        ]);

        Obat::create([
            'merek_obat' => 'antangin',
            'nama_pabrik' => 'PT. Deltomed Lab',
            'tanggal_kadaluarsa' => '17/05/2023',
        ]);
        
    }
}
