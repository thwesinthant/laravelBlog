<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate(
            [
                "title" => 'required|min:5',
                "body" => 'required|max:256',
                "category_id" => 'required',
                "photo" => 'required|mimes:png,jpeg,jpg,webp,svg',
            ]
        );
        $newPost = $request->all();
        if ($img = $request->file('photo')) {
            $path = "postPhoto/";
            $ext = Date('YmdHis') . "." . $img->getClientOriginalExtension();
            $img->move($path, $ext);
            $newPost['photo'] = $ext;
        }

        Post::create($newPost);
        return redirect(route('posts.index'))->with('success', "Create Post Success");
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Post $post)
    {
        $categories = Category::all();
        $comments = Comment::all();

        // $fetchReply = DB::table('comments')->where('ordering', '1')
        //     ->where('ordering_secondary', '>', '0')
        //     ->get();
        // return $fetchReply;

        return view("posts.show", compact('post', 'categories', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Post $post)
    {
        // $post = Post::all();
        // return $post;
        $categories = Category::all();
        return view('posts.edit', compact(['post', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        // return $post;
        $request->validate([
            "title" => 'required|min:3',
            "body" => 'required|max:256',
            "category_id" => 'required',
            "photo" => 'mimes:png,jpeg,jpg,webp,svg',
        ]);
        $updatePost = $request->all();
        if ($img = $request->file('photo')) {
            $path = "postPhoto/";
            $ext = date('YmdHis') . "." . $img->getClientOriginalExtension();
            $img->move($path, $ext);
            $updatePost['photo'] = $ext;
        }
        // return $ext;
        // $todo->completed = $request->completed ? 1 : 0;
        // // return $todo;

        // $updatePost = $request->all();

        $post->update($updatePost);
        return redirect()->route('posts.index')
            ->with('success', 'Post Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Delete post success 🥳');
    }
}
