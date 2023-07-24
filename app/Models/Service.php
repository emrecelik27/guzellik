<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'mini_description',
        'description',
        'image_url',
        'deleted',
        'created_user_code',
        'updated_user_code'
    ];
}
