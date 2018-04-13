<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';
    protected $fillable = [
    'id','firstname','lastname','email', 'password','mobile_number','sex','profile_photo','permission','token','confirmed',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function permission($permission)
    {
        if ($this->permission == $permission) {
            return true;
        }
        return false;
    }
    public function is_confirmed()
    {
    if($this->confirmed){
    return true;
    }
    else{
    return false;
    }
}
}
