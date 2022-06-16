<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create(['name'=>'user']);
    }
}
