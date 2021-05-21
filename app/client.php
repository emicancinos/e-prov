<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $table = 'clients';

    protected $fillable = [
        'name',
        'last_name',
        'birth_date',
        'phone_number',
        'user_id',
    ];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s',
        'deleted_at' => 'datetime:d-m-Y H:i:s',
    ];
}
