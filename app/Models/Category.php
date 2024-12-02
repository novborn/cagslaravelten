<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent');
    }
}

