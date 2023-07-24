<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'question',
        'answer',
        'deleted',
        'created_user_code',
        'updated_user_code'
    ];
}
