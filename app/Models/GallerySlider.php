<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Content;

class GallerySlider extends Model
{
    protected $table = 'gallery_sliders';

    protected $fillable = [
        'content_id', // foreign key
        'gallery_slider_type',
        'gallery_slider_title',
        'gallery_slider_sub_title',
        'gallery_slider_image_one',
    ];

    protected $casts = [
        'gallery_slider_image_one' => 'array',
    ];

    public function content()
    {
        return $this->belongsTo(Content::class, 'content_id', 'id');
    }
    

}
