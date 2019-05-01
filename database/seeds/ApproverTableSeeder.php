<?php

use Illuminate\Database\Seeder;
use App\Approver;

class ApproverTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $approver= new Approver();
        $approver->post_id = 1;
        $approver->user_id = 2;
        $approver->status = True;
        $approver->save();
    }
}
