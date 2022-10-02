<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'labale',
        'type_input',
        'required_input',
        'page_id',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id');
    }

    public function status()
    {
        return $this->required_input ? 'مطلوب' : 'عادي';
    }
}
