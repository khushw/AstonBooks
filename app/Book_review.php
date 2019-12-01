<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book_review extends Model
{
    protected $fillable = ['review_rating','book_fid'];
}
