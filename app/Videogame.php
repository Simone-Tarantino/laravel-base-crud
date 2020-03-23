<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    protected $fillable = [
        'title',
        'software_house',
        'genre',
        'release_date',
        'price',
        'created_at',
        'updated_at'
    ];
}
