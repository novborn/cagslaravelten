<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryRepeaterItem extends Model
{

    protected $table = 'gallery_repeater_items';
    protected $fillable = ['content_id', 'thumbnail_image', 'thumbnail_description'];

    public function content()
    {
        return $this->belongsTo(Content::class, 'content_id', 'id');
    }
}
