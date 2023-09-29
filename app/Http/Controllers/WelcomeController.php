<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
// add this
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth')->except('index');
    }

    public function index(Request $request)
    {
        // $posts = Post::paginate(5)->withQueryString();
        $posts = Post::query()->when($request->title, fn ($q, $title) => $q->where('title', 'like', "%{$title}%"))->orderBy('created_at', 'desc')->paginate(3)->withQueryString();

        $categories = Category::all();
        Paginator::useBootstrap();


        return view('welcome', compact(['posts', 'categories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
    }
}
