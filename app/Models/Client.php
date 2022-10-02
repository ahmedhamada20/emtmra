<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'code',
//        'sloppy',
//        'jops',
//        'type',
        'data',
        'time',
        'duplicate',
        'page_id',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }
}
