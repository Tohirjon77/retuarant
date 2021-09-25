<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_uz',
        'name_ru',
        'description_uz',
        'description_ru',
        'image',
        'status'
    ];
    // public function product(){
    //     return $this->hasMany(Product::class);  // images
    // }
}
