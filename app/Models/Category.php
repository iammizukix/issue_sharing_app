<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    protected $fillable = [
        'category',
    ];

    public function category()
    {
        return $this->hasMany('App\Post');
    }
}