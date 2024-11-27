<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::whereIn('name',[
            'crear permisos', 'editar permisos','ver permisos','eliminar permisos'
        ])->delete();

        //create permissions roles 
        Permission::firstOrCreate(['name'=> 'crear roles']);
        Permission::firstOrCreate(['name'=> 'editar roles']);
        Permission::firstOrCreate(['name'=> 'ver roles']);
        Permission::firstOrCreate(['name'=> 'eliminar roles']);
        
        // create permissions user 
        Permission::firstOrCreate(['name'=> 'crear usuarios']);
        Permission::firstOrCreate(['name'=> 'editar usuarios']);
        Permission::firstOrCreate(['name'=> 'ver usuarios']);
        Permission::firstOrCreate(['name'=> 'eliminar usuarios']);

        // create admin whit all permissions

        $role = Role::firstOrCreate(['name'=> 'Administrador']);
        $role->givePermissionTo(Permission::all());

      
        

    }
}
