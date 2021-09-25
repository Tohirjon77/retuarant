<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catdesc extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'status', 'cat_name'
    ];
}
