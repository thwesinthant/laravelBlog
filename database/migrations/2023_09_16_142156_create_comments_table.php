<?php

use App\Models\User;
use App\Models\Post;
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
        Schema::create('comments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignIdFor(User::class, 'user_id');
            $table->foreignIdFor(Post::class, "post_id");
            $table->unsignedBigInteger('ordering')->default(1);
            $table->unsignedBigInteger('ordering_secondary')->default(0);
            $table->string('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
