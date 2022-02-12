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
        $sa = Role::create(['name' => "superadministrator"]);
        $a = Role::create(['name' => "administrator"]);
        $b = Role::create(['name' => "broker"]);
        $c = Role::create(['name' => "client"]);

        Permission::create(['name' => 'admin.index'])->assignRole($a);
        
        Permission::create(['name' => 'admin.users.index'])->assignRole($a);
        Permission::create(['name' => 'admin.users.create'])->assignRole($a);
        Permission::create(['name' => 'admin.users.update'])->assignRole($a);
        Permission::create(['name' => 'admin.users.destroy'])->assignRole($a);

        Permission::create(['name' => 'admin.yachts.index'])->assignRole($a);
        Permission::create(['name' => 'admin.yachts.create'])->assignRole($a);
        Permission::create(['name' => 'admin.yachts.update'])->assignRole($a);
        Permission::create(['name' => 'admin.yachts.destroy'])->assignRole($a);

        Permission::create(['name' => 'admin.charters.index'])->assignRole($a);
        Permission::create(['name' => 'admin.charters.create'])->assignRole($a);
        Permission::create(['name' => 'admin.charters.update'])->assignRole($a);
        Permission::create(['name' => 'admin.charters.destroy'])->assignRole($a);

        Permission::create(['name' => 'admin.activities.index'])->assignRole($a);
        Permission::create(['name' => 'admin.activities.create'])->assignRole($a);
        Permission::create(['name' => 'admin.activities.update'])->assignRole($a);
        Permission::create(['name' => 'admin.activities.destroy'])->assignRole($a);

        Permission::create(['name' => 'admin.preference_sheets.index'])->assignRole($a);
        Permission::create(['name' => 'admin.preference_sheets.create'])->assignRole($a);
        Permission::create(['name' => 'admin.preference_sheets.update'])->assignRole($a);
        Permission::create(['name' => 'admin.preference_sheets.destroy'])->assignRole($a);

        Permission::create(['name' => 'admin.graphics'])->assignRole($a);

        Permission::create(['name' => 'admin.sales.index'])->assignRole($a);
        Permission::create(['name' => 'admin.sales.create'])->assignRole($a);
        Permission::create(['name' => 'admin.sales.update'])->assignRole($a);
        Permission::create(['name' => 'admin.sales.destroy'])->assignRole($a);

        Permission::create(['name' => 'admin.bills.index'])->assignRole($a);
        Permission::create(['name' => 'admin.bills.create'])->assignRole($a);
        Permission::create(['name' => 'admin.bills.update'])->assignRole($a);
        Permission::create(['name' => 'admin.bills.destroy'])->assignRole($a);

        Permission::create(['name' => 'admin.commissions.index'])->assignRole($a);
        Permission::create(['name' => 'admin.commissions.create'])->assignRole($a);
        Permission::create(['name' => 'admin.commissions.update'])->assignRole($a);
        Permission::create(['name' => 'admin.commissions.destroy'])->assignRole($a);

        Permission::create(['name' => 'admin.orders.index'])->assignRole($a);
        Permission::create(['name' => 'admin.orders.create'])->assignRole($a);
        Permission::create(['name' => 'admin.orders.update'])->assignRole($a);
        Permission::create(['name' => 'admin.orders.destroy'])->assignRole($a);

        Permission::create(['name' => 'admin.holds.index'])->assignRole($a);
        Permission::create(['name' => 'admin.holds.create'])->assignRole($a);
        Permission::create(['name' => 'admin.holds.update'])->assignRole($a);
        Permission::create(['name' => 'admin.holds.destroy'])->assignRole($a);

        Permission::create(['name' => 'admin.apa.index'])->assignRole($a);
        Permission::create(['name' => 'admin.apa.create'])->assignRole($a);
        Permission::create(['name' => 'admin.apa.update'])->assignRole($a);
        Permission::create(['name' => 'admin.apa.destroy'])->assignRole($a);

        
        Permission::create(['name' => 'admin.drive'])->assignRole($a);

        Permission::create(['name' => 'broker.index'])->assignRole($b);
        Permission::create(['name' => 'client.index'])->assignRole($c);
    }
}
