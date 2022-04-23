<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $fillable = [
        // 'product_id',
        'album_id',
        'name',
        'desc',
    ];

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
