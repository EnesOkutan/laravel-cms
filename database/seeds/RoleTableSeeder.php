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
     	$role_working = new Role();
        $role_working->name = 'Worker';
        $role_working->description('A worker from employees');
        $role_working->save();

        $role_working = new Role();
        $role_working->name = 'Department chef';
        $role_working->description('Chief of workers');
        $role_working->save();

        $role_working = new Role();
        $role_working->name = 'Admin';
        $role_working->description('Senior management');
        $role_working->save();   
    }
}
