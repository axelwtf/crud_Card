<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable =['name','firstname','description'];
    protected $dates = ['created_at','update_at'];
}
