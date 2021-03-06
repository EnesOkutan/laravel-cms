<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public function user()
    {
    	return $this->belongsTo("App\User");
    }

    public function department()
    {
    	return $this->belongsTo("App\Department");
    }
}
