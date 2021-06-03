<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\speciality;

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
        'speciality_id',
        'category_id'
    ];

    
    public function speciality()
    {
        return $this->belongsTo(Period::class, 'period_id');
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
