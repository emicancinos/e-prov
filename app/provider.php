<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use Illuminate\Database\Eloquent\Builder;

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
        'city_id',
        'category_id'
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
       // FILTRO
       public function scopeApplyFilters(Builder $query)
       {
           $filters = request()->get('filters');
           if (!empty($filters['category_id'])) {
               $query->where('provider.category_id', '=' , 1);
           }
           $filters = request()->get('filters');
           if (!empty($filters['category_id'])) {
               $query->where('provider.category_id', '=' , 2);
           }
           $filters = request()->get('filters');
           if (!empty($filters['category_id'])) {
               $query->where('provider.category_id', '=' , 3);
           }
           $filters = request()->get('filters');
           if (!empty($filters['category_id'])) {
               $query->where('provider.category_id', '=' , 4);
               $filters = request()->get('filters');
               if (!empty($filters['category_id'])) {
                   $query->where('provider.category_id', '=' , 5);
               }
           }

       }
   }

