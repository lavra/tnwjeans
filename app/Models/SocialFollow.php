<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialFollow extends Model
{
    protected $fillable = [
        'ip',
        'city',
        'local',
        'region',
        'country',
        'zip_code',
        'social_network_id'
    ];
}
