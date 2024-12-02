<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GalleryRepeaterItem;

class Content extends Model
{
    protected $table = 'content';

    public function category()
    {
        return $this->belongsTo(Category::class, 'page_id');
    }

    public function galleryRepeaterItems()
    {
        return $this->hasMany(GalleryRepeaterItem::class, 'content_id', 'id');
    }
    
}

