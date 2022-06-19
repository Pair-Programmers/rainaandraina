<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryFolder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'order_number',
    ];

    public function galleryImages()
    {
        return $this->hasMany(Gallery::class, 'gallery_folder_id', 'id')->take(1);
    }

    public function galleryImagesCount()
    {
        return $this->hasMany(Gallery::class, 'gallery_folder_id', 'id');
    }
}
