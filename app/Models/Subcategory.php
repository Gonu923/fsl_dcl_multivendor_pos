<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Subcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'name', 'image',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getSubCategoryImage()
    {
        return Storage::url($this->image);
    }

}
