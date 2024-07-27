<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'id' => 1,
            'user_id' => 1,
            'name' => 'AhLONG SENDRIAN BERHAD',
            'identification' => 'ID234567',
            'address' => 'Pusat Pentadbiran Negeri Sabah, Blok A, Tingkat 6 & 7, Jalan Teluk Likas,',
            'license_number' => '1234'
        ]);
    }
}
