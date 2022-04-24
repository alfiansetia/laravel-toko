<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catprod extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'desc',
        'img',
        'show',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
