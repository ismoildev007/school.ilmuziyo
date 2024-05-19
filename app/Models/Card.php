<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $fillable = [
      'title_uz',
      'title_ru',
      'title_en',
      'description_uz',
      'description_ru',
      'description_en',
      'photo',
    ];
}
