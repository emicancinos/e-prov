<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class provider extends Model
{
    protected $fillable = [
        'email',
        'cuit_number',
        'enrollment_number',
        'business_name',
        'user_id',
        'city_id'
    ];
}
