<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    protected $fillable = [
        'category_name',
        'category_image',
    ];

    public function getCategoryImage()
    {
        return Storage::url($this->category_image);
    }

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
