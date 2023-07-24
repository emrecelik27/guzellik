<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'type',
        'type_code',
        'file_type',
        'file_url',
        'deleted',
        'created_user_code',
        'updated_user_code'
    ];
}
