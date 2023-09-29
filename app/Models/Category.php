<?php

namespace App\Models;

use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    // guarded var -> has similar meaning as $fillable , but $guraded doesn't need to store table name in array like $fillable
    // on to many function
    public function posts()
    {
        return $this->hasMany(Post::class)->onDelete('cascade');
    }
    // onDelete method -> once you delete category , all posts having that category (id) will also be deleted.
}
