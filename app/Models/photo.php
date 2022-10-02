<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $fillable = [
        'Filename',
        'phototable_type',
        'phototable_id',
    ];

    public function phototable()
    {
        return $this->morphTo('App\Models\Photo');
    }
}
