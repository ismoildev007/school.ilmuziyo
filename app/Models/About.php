<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

    protected $fillable = [
      'description_uz',
      'description_ru',
      'description_en',
      'sciences_uz',
      'sciences_ru',
      'sciences_en',
      'language_uz',
      'language_ru',
      'language_en',
      'big_language_uz',
      'big_language_ru',
      'big_language_en',
      'photo',
    ];
}
