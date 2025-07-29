<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;// Ajouter une ligne

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

