<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class speciality extends Model
{
    protected $fillable = [
        'description',
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


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
