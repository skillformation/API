<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Colonne autoriser en ecriture
    protected $fillable=[
        'title',
        'content',
        'published',
    ];

    protected $cast=[
        'published'=>'boolean',
    ];
}

