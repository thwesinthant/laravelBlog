<?php

use App\Models\User;
use App\Models\Category;
use App\Models\Comment;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('body');
            $table->string('photo')->nullable();
            $table->foreignIdFor(User::class, "user_id")->nullable();
            $table->foreignIdFor(Category::class, "category_id")->nullable();
            $table->foreignIdFor(Comment::class, "comment_id")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
