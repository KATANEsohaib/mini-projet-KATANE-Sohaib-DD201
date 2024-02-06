<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProd extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'updated_at',
         'created_at',
    ];
}
