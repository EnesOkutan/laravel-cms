<?php

use Illuminate\Database\Seeder;
use App\Manager;
use App\Department;

class ManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = new Manager();
        $manager->user_id = 2; 
        $manager->department()->associate(Department::where('name','Teknoloji')->first());
        $manager->save();

        $manager = new Manager();
        $manager->user_id = 3;
        $manager->department()->associate(Department::where('name','Tarım')->first());
        $manager->save();

        $manager = new Manager();
        $manager->user_id = 4;
        $manager->department()->associate(Department::where('name','Tekstil')->first());
        $manager->save();

    }
}
