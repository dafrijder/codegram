<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'photo'
    ];

    // --- Relationships ---

    // Een post hoort bij 1 gebruiker
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Een post heeft meerdere reacties
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
