<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Carmen Soto',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('123456')
        ])->assignRole('superadministrator');

        User::create([
            'name' => 'Carmen Soto',
            'email' => 'admin@example.com',
            'password' => bcrypt('123456')
        ])->assignRole('administrator');

        User::create([
            'name' => 'Carmen Soto',
            'email' => 'broker@example.com',
            'password' => bcrypt('123456')
        ])->assignRole('broker');

        User::create([
            'name' => 'Carmen Soto',
            'email' => 'client@example.com',
            'password' => bcrypt('123456')
        ])->assignRole('client');
    }
}
