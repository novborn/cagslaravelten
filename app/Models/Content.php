<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GalleryRepeaterItem;
use App\Models\ContentGallery;
use App\Models\GallerySlider;

class Content extends Model
{
    protected $table = 'content';

    protected $fillable = [
        'page_id',
        'title',
        'description',
        'is_active',
        'meta_title',
        'meta_desc',
        'extra_tags',
        'gallery_section_title',
        'gallery_section_sub_title',
        'inner_page_title',
        'inner_page_sub_title',
        'inner_page_banner',
    ];


    public function category()
    {
        return $this->belongsTo(Category::class, 'page_id');
    }


    public function contentGallery()
    {
        return $this->hasMany(ContentGallery::class, 'content_id', 'id');
    }

    public function getGallerySlider()
    {
        return $this->hasMany(GallerySlider::class, 'content_id');
    }


    
    
}

