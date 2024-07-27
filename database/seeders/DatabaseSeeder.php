<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Permit;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Database\Seeders\AdsTypeSeeder;
use Database\Seeders\CompanySeeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(AdsTypeSeeder::class);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'pemeriksa']);
        Role::create(['name' => 'penyokong']);
        Role::create(['name' => 'pelulus']);
        Role::create(['name' => 'user']);

        $user = User::create([
            'name' => 'pemeriksa',
            'username' => 'pemeriksa',
            'password' => Hash::make('secret'),
            'noic' => '123456789091',
            'email' => 'pemeriksa@example.com',
            'user_level' => 1,
        ]);

        $user->assignRole('pemeriksa');

        $user = User::create([
            'name' => 'penyokong',
            'username' => 'penyokong',
            'password' => Hash::make('secret'),
            'noic' => '123456789092',
            'email' => 'penyokong@example.com',
            'user_level' => 1,
        ]);

        $user->assignRole('penyokong');

        $user = User::create([
            'name' => 'pelulus',
            'username' => 'pelulus',
            'password' => Hash::make('secret'),
            'noic' => '123456789093',
            'email' => 'pelulus@example.com',
            'user_level' => 1,
        ]);

        $user->assignRole('pelulus');


        $user = User::create([
            'name' => 'Jue',
            'username' => 'jue',
            'password' => Hash::make('secret'),
            'noic' => '123456789090',
            'email' => 'jue@example.com',
            'user_level' => 1,
        ]);

        $user->assignRole('user');

        $company = new Company();
        $company->name = 'AhLONG SENDRIAN BERHAD';
        $company->identification = 'ID234567';
        $company->tel = '1234567';
        $company->address = 'Pusat Pentadbiran Negeri Sabah, Blok A, Tingkat 6 & 7, Jalan Teluk Likas';
        $company->license_number = '1234';

        $user->companies()->save($company);

        $permit = new Permit();
        $permit->ads = ['1', '2'];
        $company->permits()->save($permit);

        // $this->call(CompanySeeder::class);
    }
}
