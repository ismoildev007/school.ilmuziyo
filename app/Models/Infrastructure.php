<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infrastructure extends Model
{
    use HasFactory;

    protected $table = 'infrastructures';

    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'photo',
    ];
}
