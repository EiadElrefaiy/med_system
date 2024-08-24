<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $fillable = [
        'client_code',
        'position_id_fk',
        'middle_name',
        'last_name',
        'name_ar',
        'whatsapp',
        'facebook',
        'telegram_number',
        'country',
        'city',
        'university',
        'faculty',
        'specialty',
        'working_place',
        'heard_about',
        'type',
        'subscription_id_fk',
        'city_id_fk',
        'name',
        'govern_id_fk',
        'national_num',
        'country_code',
        'mob',
        'mob2',
        'mob3',
        'email',
        'debt',
        'adress',
        'longitude',
        'latitude',
        'date',
        'publisher',
        'deleted'
    ];
}

/*
'client_code',
'name',
'middle_name',
'last_name',
'name_ar'
'heard_about',
'country',
'city',
'adress',
'university',
'faculty',
'specialty',
'mob',
'mob2',
'email',
'university',
'working_place',
'heard_about',
*/