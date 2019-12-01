<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['author_firstname', 'author_middlename', 'author_lastname'];
}
