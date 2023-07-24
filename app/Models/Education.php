<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'title',
        'mini_description',
        'description',
        'deleted',
        'created_user_code',
        'updated_user_code'
    ];
}
