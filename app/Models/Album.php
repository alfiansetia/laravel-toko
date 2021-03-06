<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'desc',
        'img',
        'show',
    ];

    public function foto(){
        return $this->hasMany(Foto::class);
    }
}
