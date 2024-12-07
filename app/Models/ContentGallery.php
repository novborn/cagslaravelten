<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Content;

class ContentGallery extends Model
{
    protected $table = 'content_gallery';

    protected $fillable = [
        'content_id', // foreign key
        'content_gallery_image',
        'content_gallery_desc',
    ];

    public function content()
    {
        return $this->belongsTo(Content::class, 'content_id', 'id');
    }
    

}
