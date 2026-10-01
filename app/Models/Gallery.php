<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Program;

class Gallery extends Model
{
    protected $fillable = [
        'program_id',
        'judul',
        'image',
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}