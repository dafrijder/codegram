<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'comment'
    ];

    // --- Relationships ---

    // Een comment hoort bij 1 gebruiker
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Een comment hoort bij 1 post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
