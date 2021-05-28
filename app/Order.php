<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)
        // cuando producto es llamado desde el Order modal, esta columna sera llamarda y devuelta
         ->withPivot('quantity');

    }

}
