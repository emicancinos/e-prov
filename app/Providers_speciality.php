<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\provider;
use App\speciality;

class providers_speciality extends Model
{
    protected $table = 'providers_specialities';

    protected $fillable = [
        'provider_id',
        'speciality_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s'
    ];

    public function provider()
    {
        return $this->belongsTo(provider::class, 'provider_id');
    }

    public function speciality()
    {
        return $this->belongsTo(speciality::class, 'speciality_id');
    }

}
