<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;


    protected $fillable  = ['name'];


    //i do not show this
    protected $hidden = [
        'laravel_through_key',
        'created_at',
        'updated_at'
    ];
}
