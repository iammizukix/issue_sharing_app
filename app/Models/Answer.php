<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    protected $fillable = [
        'Reply',
        'reply_id',
        'user_id',
        'Replied_at',
    ];

    public function reply()
    {
        return $this->belongsTo('App\Post');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}