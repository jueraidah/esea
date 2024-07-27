<?php

namespace Database\Seeders;

use App\Models\Adstype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdsType::create([
            'id' => 1,
            'name' => 'Brosur',
        ]);

        AdsType::create([
            'id' => 2,
            'name' => 'Internet',
        ]);

        AdsType::create([
            'id' => 3,
            'name' => 'Akhbar',
        ]);

        AdsType::create([
            'id' => 4,
            'name' => 'Television',
        ]);

        AdsType::create([
            'id' => 5,
            'name' => 'Papan Tanda',
        ]);

        AdsType::create([
            'id' => 6,
            'name' => 'Cekera Padat Video',
        ]);

        AdsType::create([
            'id' => 7,
            'name' => 'Radio',
        ]);

        AdsType::create([
            'id' => 8,
            'name' => 'Panggung Wayang',
        ]);


    }
}
