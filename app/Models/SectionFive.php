<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SectionFive extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = ['title'];

    protected $fillable = [
        'title',
        'url',
        'page_id',
        'photo',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class,'page_id');
    }
}
