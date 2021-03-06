<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function posts()
    {
        return $this->hasMany("App\Post");
    }

    public function department()
    {
        return $this->belongsTo("App\Department");
    }

    public function managers()
    {
        return $this->hasMany('App\Manager');
    }

    public function approvers()
    {
        return $this->hasMany("App\Approver");
    }

    public function hasRole($role):bool
    {
        return (bool)$this->role()->where('name',$role)->first();
    }


}
