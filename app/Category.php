<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\speciality;

class Category extends Model
{
    protected $fillable = [
        'name'
    ];

      /**
     * Relation HasMany with Speciality Model.
     *
     * @return HasMany
     */
    public function speciality()
    {
        return $this->hasMany(speciality::class );
    }
}
