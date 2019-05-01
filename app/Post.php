<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
    	return $this->belongsTo("App\User");
    }

    public function department()
    {
    	return $this->belongsTo("App\Department");
    }

    public function approvers()
    {
    	return $this->hasMany("App\Approver");
    }
}
