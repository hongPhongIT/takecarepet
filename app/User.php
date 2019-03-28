<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements
	AuthenticatableContract,
    AuthorizableContract
{
	use Authenticatable, Authorizable;

    protected $fillable = [
        'user_name',
        'email',
        'password',
        'phone',
        'remember_token',
        'address',
        'social_id',
        'role',
        'is_active'

    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
