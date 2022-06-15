<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('1')
        ]);

        $role = Role::create(['name'=>'admin']);
        $permission = Permission::pluck('id','id')->all();
        $role->syncPermissions($permission);
        $user->assignRole($role);
    }
}
