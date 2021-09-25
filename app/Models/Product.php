<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'name_uz', 'name_ru', 'description_uz', 'description_ru', 
        'structura_uz', 'structura_ru', 'image', 'price', 'cat_name', 'status'
    ];
    // public function category(){
    //     return $this->belongsTo(Category::class);  // belongs to -> ga tegishli 
    //     //BelongsTo - HasOne -ning teskarisi. HasOne munosabatlarining teskarisini aidTo usuli yordamida aniqlashimiz mumkin. Foydalanuvchi va telefon modellari bilan oddiy misolni oling. Men Foydalanuvchidan Telefonga hasOne aloqasini beraman. sinf Foydalanuvchi Modelni kengaytiradi { /*** Foydalanuvchi bilan bog'langan telefon yozuvini oling.
    // }
}
