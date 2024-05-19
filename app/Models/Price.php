<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $table = 'prices';

    protected $fillable = [
      'inf_price',
      'all_price',
      'kitchen_price_one',
      'kitchen_price_three',
    ];
}
