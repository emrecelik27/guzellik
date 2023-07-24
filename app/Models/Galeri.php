<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'image_url',
        'description',
        'deleted',
        'created_user_code',
        'updated_user_code'
    ];
}
