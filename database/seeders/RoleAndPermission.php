<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndPermission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roleAdmin = Role::create(['name'=>'admin']);
        $roleEmploye =Role::create(['name'=>'employe']);
        $roleClient = Role::create(['name'=>'client']);

        /**creations des permissions  */

        $editEmployePermission = Permission::create(['name'=>'edit employe']);
        $createEmployePermission = Permission::create(['name'=>'create employe']);
        $deleteEmployePermission = Permission::create(['name'=>'delete employe']);

        $editProduitPermission = Permission::create(['name'=>'edit produit']);
        $createProduitPermission = Permission::create(['name'=>'create produit']);
        $deleteProduitPermission = Permission::create(['name'=>'delete produit']);

        $editClientPermission = Permission::create(['name'=>'edit client']);
        $createClientPermission = Permission::create(['name'=>'create client']);
        $deleteClientPermission = Permission::create(['name'=>'delete client']);


        $editCommandePermission = Permission::create(['name'=>'edit commande']);
        $deleteCommandePermission = Permission::create(['name'=>'delete commande']);

        $dashboardPermission = Permission::create(['name'=>'access dasboard']);
        

        $roleClient->givePermissionTo($dashboardPermission);

       $roleAdmin->givePermissionTo($editClientPermission, $createClientPermission, $deleteClientPermission, $editEmployePermission, $createEmployePermission, $deleteEmployePermission, $editProduitPermission, $createProduitPermission, $deleteProduitPermission, $editCommandePermission, $deleteCommandePermission);


        $roleEmploye->givePermissionTo($createClientPermission,$editClientPermission,$editCommandePermission);






    }
}
