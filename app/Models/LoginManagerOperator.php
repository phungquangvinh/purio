<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class LoginManagerOperator extends Authenticatable
{
    protected $primaryKey = 'serial_no';

    public function getAuthPassword()
    {
        return $this->login_pw;
    }

    protected $fillable = [
        'manager_id',
        'login_id',
        'login_pw',
        'name',
        'del_flg',
        'registered_person',
        'updater'
    ];
    protected $hidden = [
        'login_pw', 'remember_token',
    ];
}
