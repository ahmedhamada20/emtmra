<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SectionSeven extends Model
{
    use HasFactory;

    use HasTranslations;
    public $translatable = ['category','sub_category'];
    protected $fillable = [
        'category',
        'sub_category',
        'page_id',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class,'page_id');
    }
}
