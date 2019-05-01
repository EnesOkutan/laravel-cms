<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
    	return $this->belongs("App\Post");
    }

    public function department()
    {
    	return $this->hasMany("App\Department");
    }

    public function approvers()
    {
    	return $this->hasMany("App\Approver");
    }
}
