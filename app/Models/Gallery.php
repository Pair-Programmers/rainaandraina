<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'order_number',
        'gallery_folder_id',
        'admin_id',
    ];

    public function galleryFolder()
    {
        return $this->hasOne(GalleryFolder::class, 'id', 'gallery_folder_id');
    }
}
