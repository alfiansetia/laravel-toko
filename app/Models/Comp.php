<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comp extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'address',
        'email',
        'wa',
        'fb',
        'ig',
        'yt',
        'fav',
        'logo',
        'slogan',
    ];
}
