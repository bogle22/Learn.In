<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = [
        'nama',
        'deskripsi',
        'detail',
        'image',
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}