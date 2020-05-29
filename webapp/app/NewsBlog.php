<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsBlog extends Model
{
    protected $table = 'newsblog';
    Protected $fillable = ['title', 'type', 'content','categories','author','user_id'];
}
