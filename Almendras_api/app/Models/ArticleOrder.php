<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleOrder extends Model
{
    use HasFactory;

    protected $table = 'articles_orders';

    protected $fillable = [
        'article',
        'order'
    ];
}
