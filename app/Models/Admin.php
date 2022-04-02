<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [

            'id',
            'name',
            'email',
            'phone',
            'role',
            'status',
            'profile_image',
            'password'
    ];

}
