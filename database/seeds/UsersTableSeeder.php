<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
               $rol_administrador  = Role::where('name', 'ROL_ADMINISTRADOR')->first();
        $rol_cliente = Role::where('name', 'ROL_CLIENTE')->first();  
       /* $rol_vendedor = Role::where('name', 'ROL_VENDEDOR')->first(); 
        
        $rol_mecanico = Role::where('name', 'ROL_MECANICO')->first();  */
    
        $administrador = new User;
        $administrador->name = 'Administrador';
        $administrador->email = 'administrador@example.com';
        $administrador->password = bcrypt('administrador');
        $administrador->save();
        $administrador->roles()->attach($rol_administrador);
    }
}
