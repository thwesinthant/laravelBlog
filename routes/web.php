<?php

use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\ReplyController;
use Bookworm\Bookworm;

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/a', function () {
//     return view('a');
// });

Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);

Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

// welcome route
Route::resource("/", WelcomeController::class);
// post route
Route::resource("posts", PostController::class);
// category route
Route::resource("categories", CategoryController::class);
// comment route
Route::resource("comments", CommentController::class);
// comment route
Route::resource("replies", ReplyController::class);
// favourite route
Route::resource("favourites", FavouriteController::class);
// user route
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

Route::get('/text', function () {



    $text = ' ';
    $time = Bookworm::estimate($text);
    echo $time; // 5 minutes
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
