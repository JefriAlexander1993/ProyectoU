<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol_administrador = new Role;
        $rol_administrador->name = 'ROL_ADMINISTRADOR';
        $rol_administrador->display_name = 'Administrador';
        $rol_administrador->description = 'Usuario que se encarga de administrar usuarios, permisos y roles, mas.';

        $rol_administrador->save();
    
    }
}
