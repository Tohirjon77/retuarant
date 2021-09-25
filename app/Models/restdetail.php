<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restdetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'title',
        'menus',
        'month_new_recipe',
        'face_custom'
    ];
}
