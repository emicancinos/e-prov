<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class provider extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'providers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'cuit_number',
        'enrollment_number',
        'business_name',
        'user_id',
        'city_id'
    ];

    /**
     * Relation HasMany with Category Model.
     *
     * @return HasMany
     */
    public function category()
    {
        return $this->hasMany(Category::class );
    }
}
