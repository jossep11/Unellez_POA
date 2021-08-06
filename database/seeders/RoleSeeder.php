<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin1 = Role::create(['name'=>'admin']);
        $user1 = Role::create(['name'=>'user']);
        $agregar_eliminar = Permission::create(['name'=>'agregar eliminar'])->assignRole($user1);
        
        $user1_admin = User::create([
            'name'=> 'admin',
            'email'=> 'Admin1@gmail.com',
            'Nombres'=> 'Jhonathan Graterol',
            'password'=> bcrypt('110220'),

        ]);

        $user2_user = User::create([
            'name'=> 'proyecto',
            'email'=> 'proyecto@gmail.com',
            'Nombres'=> 'Proyecto',
            'password'=> bcrypt('110220'),

        ]);
        $user1_admin->assignRole($admin1);
        $user2_user->assignRole($user1);


    }
}
