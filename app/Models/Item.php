<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;
use Spatie\MediaLibrary\Media;

use Brackets\Media\HasMedia\HasMediaCollections;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Brackets\Media\HasMedia\HasMediaThumbsTrait;

class Item extends Model implements HasMediaCollectionsTrait {

    use HasMediaCollectionsTrait;
    use HasMediaThumbsTrait;
    

    protected $fillable = [
        'type',
        'active',
        'title',
        // 'url',
        // 'order',
        'text',
        'image',
    
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    public function registerMediaCollections()
    {
        $this->addMediaCollection('gallery')
             ->accepts('image/*');
    }

    // public function registerMediaConversions(Media $media = null)
    // {
    //     $this->autoRegisterThumb200();
    // }

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/items/'.$this->getKey());
    }
}
