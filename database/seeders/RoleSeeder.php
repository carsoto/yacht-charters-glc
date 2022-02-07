<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = Role::create('name' => "Administrator");
        $b = Role::create('name' => "Broker");
        $c = Role::create('name' => "Client");

        admin.reports
        
        admin.users.index
        admin.users.create
        admin.users.update
        admin.users.destroy

        admin.yachts.index
        admin.yachts.create
        admin.yachts.update
        admin.yachts.destroy

        admin.charters.index
        admin.charters.create
        admin.charters.update
        admin.charters.destroy

        admin.activities.index
        admin.activities.create
        admin.activities.update
        admin.activities.destroy

        admin.prference_sheet.index
        admin.prference_sheet.create
        admin.prference_sheet.update
        admin.prference_sheet.destroy

    }
}
