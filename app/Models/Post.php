<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    protected $fillable = [
        'category',
        'produce',
        'description',
        'button',
        'vocabulary',
        'reply_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function reply()
    {
        return $this->hasMany('App\Answer');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}