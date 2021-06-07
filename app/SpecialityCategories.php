<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\speciality;
use App\provider;

class SpecialityCategories extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'specialities_category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider_id',
        'category_id',
        'speciality_id'
    ];

    public function provider()
    {
        return $this->belongsTo(provider::class, 'provider_id');
    }

    public function speciality()
    {
        return $this->belongsTo(speciality::class, 'speciality_id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
