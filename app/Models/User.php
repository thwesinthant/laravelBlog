<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Support\Str;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'provider',
        'provider_id',
        'provider_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static function generateNickname($username)
    {
        if ($username === null) {
            $username = Str::lower(Str::random(length: 8));
        }
        if (User::where('username', $username)->exists()) {
            $newNickname = $username . Str::lower(Str::random(length: 3));
            $username = self::generateUserName($newNickname);
        }
        return $username;
    }

    public static function generateUsername($name)
    {
        if ($name === null) {
            $name = Str::lower(Str::random(length: 8));
        }
        if (User::where('name', $name)->exists()) {
            $newUsername = $name . Str::lower(Str::random(length: 3));
            $name = self::generateUserName($newUsername);
        }
        return $name;
    }


    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
