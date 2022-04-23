<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'catprod_id',
        'name',
        'price',
        'desc',
        'img',
        'show',
        'is_fav',
    ];

    public function fotoprod()
    {
        return $this->hasMany(Fotoprod::class);
    }
}
