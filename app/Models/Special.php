<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    use HasFactory;

    protected $table = 'specials';

    protected $fillable = [
      'description_uz',
      'description_ru',
      'description_en',
      'photo',
    ];
}
