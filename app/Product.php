<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Category::class);

    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
