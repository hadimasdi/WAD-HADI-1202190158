<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccine extends Model
{
    use HasFactory;

    protected $table = 'vaccines';
    protected $fillable = [
        'id', 'name', 'price', 'description', 'image'
    ];
}
