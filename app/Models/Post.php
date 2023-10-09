<?php

namespace App\Models;

use App\Models\User;
use App\Models\Str;
use App\Models\Category;
use App\Models\Comment;
use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Bookworm\Bookworm;


class Post extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function humanReadTime($body)
    {
        $time = Bookworm::estimate($body);
        echo $time;
    }
}
