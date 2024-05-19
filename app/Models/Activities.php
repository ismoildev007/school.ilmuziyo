<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;

    protected $table = 'activities';

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
