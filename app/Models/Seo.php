<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
    protected $fillable = [
        'notes',
        'seotable_type',
        'seotable_id',
    ];

    public function seotable()
    {
        return $this->morphTo('App\Models\Seo');
    }
}
