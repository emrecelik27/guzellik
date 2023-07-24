<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AltEducation extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'education_code',
        'title',
        'mini_description',
        'description',
        'main_image_url',
        'deleted',
        'created_user_code',
        'updated_user_code'
    ];
}
