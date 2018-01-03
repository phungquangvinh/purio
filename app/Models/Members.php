<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Members extends  Authenticatable
{
    protected $primaryKey = 'member_id';
    public function getAuthPassword()
    {
        return $this->login_pass;
    }
    protected $fillable = [
        'member_id',
        'full_name',
        'sex',
        'mail_address',
        'prefectures',
        'street_address',
        'building_etc',
        'tel_no',
        'input_ip_address',
        'input_browser',
        'del_flg',
        'active',
        'registered_person',
        'updater',
        'created_at',
        'updated_at',
        'login_id',
        'login_pass'
    ];
    protected $hidden = [
        'login_pass'
    ];

}
