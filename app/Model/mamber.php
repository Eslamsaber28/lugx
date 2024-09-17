<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class mamber extends Model
{
    protected $fillable = [
       "id", "name","surname","email","massage",
    ];
}

