<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restcall extends Model
{
    use HasFactory;
    protected $fillable = [
        'location',
        'email',
        'call',
        'timelesson'
    ];
}
