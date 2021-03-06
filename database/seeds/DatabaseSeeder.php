<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	RoleTableSeeder::class,
            DepartmentTableSeeder::class,
        	UserTableSeeder::class,
            PostTableSeeder::class,
            ManagerTableSeeder::class,
            ApproverTableSeeder::class,
        ]);
    }
}
