<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'image_url',
        'title',
        'description',
        'deleted',
        'created_user_code',
        'updated_user_code'
    ];
}
