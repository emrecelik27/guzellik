<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeyValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'key',
        'value',
        'optional',
        'deleted',
        'created_user_code',
        'updated_user_code'
    ];
}
