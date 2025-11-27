<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'is_admin',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // --- Relationships ---

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function followers()
    {
        return $this->belongsToMany(
            User::class,
            'followers',
            'following_id',   // dit ben IK
            'follower_id'     // gebruikers die mij volgen
        );
    }

    public function following()
    {
        return $this->belongsToMany(
            User::class,
            'followers',
            'follower_id',    // dit ben IK
            'following_id'    // users die ik volg
        );
    }
}
