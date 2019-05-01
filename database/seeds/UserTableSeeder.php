<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $worker = new User();
        $worker->name = 'Enes Okutan';
        $worker->username = 'enes';
        $worker->password = bcrypt('enes123');
        $worker->save();
        $worker->roles()->attach(Role::where('name','Worker')->first());

        $chef = new User();
        $chef->name = 'Ali canik';
        $chef->username = 'ali';
        $chef->password = bcrypt('ali123');
        $chef->save();
        $chef->roles()->attach(Role::where('name','Department chef'));

        $admin = new User();
        $admin->name = 'Selim Güngör';
        $admin->username = 'selim';
        $admin->password = bcrypt('selim123');
        $admin->save();
        $admin->roles()->attach(Role::where('name','Admin'));

    }
}
