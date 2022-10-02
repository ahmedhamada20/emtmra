<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_page',
        'notes',
    ];

    protected $appends = ['image','message'];


    public function getMessageAttribute()
    {
        return $this->seo != null ? $this->seo()->where('seotable_type','App\Models\Page')->where('seotable_id',$this->id)->select('notes','id')->first() : null;
    }


    public function getImageAttribute()
    {
        return $this->photo != null ? asset('admin/pictures/pages/' . $this->id .'/'.$this->photo->Filename ) : null;
    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'phototable');
    }

    public function setting()
    {
        return $this->morphOne(Setting::class, 'settingtable');
    }

    public function seo()
    {
        return $this->morphOne(Seo::class,'seotable');
    }


}
