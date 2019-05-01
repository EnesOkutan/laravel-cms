<?php

use Illuminate\Database\Seeder;
use App\Department;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$genel = new Department();
        $genel->name = "Genel";
        $genel->description = "Herkese açık bölüm";
        $genel->save();

        $tekstil = new Department();
        $tekstil->name = "Tekstil";
        $tekstil->description = "Tekstil bölümü";
        $tekstil->save();

        $teknoloji = new Department();
        $teknoloji->name = "Teknoloji";
        $teknoloji->description = "Teknoloji bölümü";
        $teknoloji->save();

        $tarım = new Department();
        $tarım->name = "Tarım";
        $tarım->description = "Tarım bölümü";
        $tarım->save();

    }
}
