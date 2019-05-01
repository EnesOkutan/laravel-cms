<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;
use App\Department;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = new User();
        $admin->name = 'Admin';
        $admin->surname = 'Admin';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('admin123');
        $admin->role()->associate(Role::where('name','Admin')->first());
        $admin->department()->associate(Department::where('name','Genel')->first());
        $admin->save();

        $worker = new User();
        $worker->name = 'Enes';
        $worker->surname = 'Okutan';
        $worker->email = 'enes@okutan.com';
        $worker->password = bcrypt('enes123');
        $worker->role()->associate(Role::where('name','worker')->first());
        $worker->department()->associate(Department::where('name','Teknoloji')->first());
        $worker->save();

        $chef = new User();
        $chef->name = 'Ali';
        $chef->surname = "canik";
        $chef->email = 'ali@canik.com';
        $chef->password = bcrypt('ali123');
        $chef->role()->associate(Role::where('name','Department chef')->first());
        $chef->department()->associate(Department::where('name','Tarım')->first());
        $chef->save();

        $worker = new User();
        $worker->name = 'Selim';
        $worker->surname = 'Güngör';
        $worker->email = 'selim@gungor.com';
        $worker->password = bcrypt('selim123');
        $worker->role()->associate(Role::where('name','Worker')->first());
        $worker->department()->associate(Department::where('name','Tekstil')->first());
        $worker->save();

    }
}
