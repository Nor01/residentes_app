<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //

        $roleAdmin= Role::create(['name'=>'Admin']);
        $roleResidence= Role::create(['name'=>'Residence']);
        $roleSecurity= Role::create(['name'=>'Security']);

        Permission::create(['name'=>'Creation of Users'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Activate/Deactivate User'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Block Guest Log'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Recover password'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Main Dashboard Admin'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Expenses Module'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Revenue Module'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Account statements'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Communications Module'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Booking Module'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Visits by Enter'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Frequent Visits'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Visitor Log'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Survey Module Admin'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Incident/Complaints Module'])->assignRole($roleAdmin);
        Permission::create(['name'=>'Generation of Fees/Charges'])->assignRole($roleAdmin);

        Permission::create(['name'=>'Visits Module'])->assignRole($roleResidence);
        Permission::create(['name'=>'Payment Module'])->assignRole($roleResidence);
        Permission::create(['name'=>'Expense Module'])->assignRole($roleResidence);
        Permission::create(['name'=>'Chat with the Security'])->assignRole($roleResidence);
        Permission::create(['name'=>'Access Log'])->assignRole($roleResidence);
        Permission::create(['name'=>'Panic alert'])->assignRole($roleResidence);
        Permission::create(['name'=>'Incidents/Complaints Module'])->assignRole($roleResidence);
        Permission::create(['name'=>'Survey Module Residence'])->assignRole($roleResidence);
        Permission::create(['name'=>'Reservations Module'])->assignRole($roleResidence);
        Permission::create(['name'=>'Vehicle Registration'])->assignRole($roleResidence);
        Permission::create(['name'=>'Main Dashboard Residence'])->assignRole($roleResidence);
        Permission::create(['name'=>'Profile Creation'])->assignRole($roleResidence);
        Permission::create(['name'=>'Pin/Password Change'])->assignRole($roleResidence);
        Permission::create(['name'=>'Account status'])->assignRole($roleResidence);

        Permission::create(['name'=>'Chat'])->syncRoles([$roleSecurity, $roleAdmin]);
        Permission::create(['name'=>'Visitor Reception'])->syncRoles([$roleSecurity, $roleAdmin]);
        Permission::create(['name'=>'Farewell to Visitors'])->syncRoles([$roleSecurity, $roleAdmin]);
        Permission::create(['name'=>'Scanner button for QR'])->syncRoles([$roleSecurity, $roleAdmin]);

    }
}
