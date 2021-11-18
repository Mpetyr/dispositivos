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
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleUsuario = Role::create(['name' => 'Usuario']);

        Permission::create(['name' => 'dispositivo.index'])->assignRole($roleAdmin);
        Permission::create(['name' => 'dispositivo.create'])->assignRole($roleAdmin);
        Permission::create(['name' => 'dispositivo.edit'])->assignRole($roleAdmin);
        Permission::create(['name' => 'dispositivo.destroy'])->assignRole($roleAdmin);

        Permission::create(['name' => 'categorias.index'])->assignRole($roleAdmin);
        Permission::create(['name' => 'categorias.create'])->assignRole($roleAdmin);
        Permission::create(['name' => 'categorias.edit'])->assignRole($roleAdmin);
        Permission::create(['name' => 'categorias.destroy'])->assignRole($roleAdmin);

        Permission::create(['name' => 'reserva.index'])->syncRoles([$roleAdmin, $roleUsuario]);
        Permission::create(['name' => 'reserva.create'])->syncRoles([$roleAdmin, $roleUsuario]);

        Permission::create(['name' => 'dispositivo_reservado.index'])->assignRole($roleAdmin);
        Permission::create(['name' => 'dispositivo_reservado.destroy'])->assignRole($roleAdmin);

            /* Permission::create(['name' => 'reservas.index'])->assignRole($roleUsuario);
            Permission::create(['name' => 'reservas_usuario.destroy'])->assignRole($roleUsuario); */
    }
}
