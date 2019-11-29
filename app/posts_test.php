<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts_test extends Model
{
    protected $fillable = ["slug","body","published_at"];
}
