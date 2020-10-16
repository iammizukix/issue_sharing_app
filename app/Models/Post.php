<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded = array('id');

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function reply()
    {
        return $this->hasOne('App\Answer');
    }
}