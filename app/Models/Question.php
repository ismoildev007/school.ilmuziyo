<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
      'title_uz',
      'title_ru',
      'title_en',
      'description_uz',
      'description_ru',
      'description_en',
    ];
}
