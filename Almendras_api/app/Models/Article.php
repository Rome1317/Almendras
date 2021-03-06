<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $primaryKey = 'code';

    protected $table = 'articles';

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'created_by',
        'image'

    ];
}
