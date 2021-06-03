<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\provider;
use App\Category;

class ProvidersCategories extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'providers_categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider_id',
        'category_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s',
    ];


    public function provider()
    {
        return $this->belongsTo(provider::class, 'provider_id');
    }

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }

}
