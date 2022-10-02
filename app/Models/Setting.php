<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name_site','title'];
    
    protected $fillable = [
        'name_site',
        'title',
        'notes',
        'phone',
        'facebook',
        'url',
        'photo_navbar',
        'photo_cover',
        'photo_site',
        'page_id',
    ];

    protected $appends = ['image'];


    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/pages/' . $this->id . '/' . $this->photo->Filename) : null;
    }


    public function photo()
    {
        return $this->morphOne(Photo::class, 'phototable');
    }


    public function seo()
    {
        return $this->morphOne(Seo::class, 'seotable');
    }
}
