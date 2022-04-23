<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhatsappMessage extends Model
{
    protected $fillable = [
        'mame',
        'code',
        'phone',
        'message',
        'ip',
        'city',
        'local',
        'region',
        'country',
        'zip_code'
    ];}
