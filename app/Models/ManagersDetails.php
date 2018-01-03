<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ManagersDetails extends Model
{
    protected $primaryKey = 'manager_id';
    protected $fillable = [
        'name',
        'prefectures',
        'city_country',
        'building_name',
        'tel_no',
        'mail_address',
        'del_flg',
        'member_ip',
        'access_device',
        'member_web',
        'registered_person',
        'updater',
    ];
}
