<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        if ($posts) {
            return response()->json([
                "data" => $posts,
                "message" => "Posts retrieved successfully",
                "status" => 200,
            ], 200);
        } else {
            return response()->json([
                "message" => 'Sever Error',
                "status" => 500,
            ], 500);
        }
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'body' => 'required|min:20',
            'photo' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => '422',
                'errors' => $validator->errors(),
                'message' => 'Validation failed',
            ], 422);
        } else {
            $posts = Post::create($request->all());
            if ($posts) {
                return response()->json([
                    'data' => $posts,
                    'message' => 'Post created successfully',
                    'status' => 201,
                ], 201);
            } else {
                return response()->json([
                    'status' => 500,
                    'message' => 'server error'
                ], 500);
            }
        }
    }

    public function show(string $id)
    {
        $post = Post::find($id);
        if ($post) {
            return response()->json([
                "data" => $post,
                "message" => "Post retrieved successfully",
                "status" => 200
            ], 200);
        } else {
            return response()->json([
                "message" => "Post Not Found",
                "status"  => 404
            ], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => "nullable|max:255",
            'body' => 'nullable',
            'photo' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "errors" => $validator->errors(),
                "message" => "Validation failed",
            ], 422);
        }

        $post = Post::find($id);
        $res = $post->update($request->all());

        if ($res) {
            return response()->json([
                "data" => $post,
                "message" => "Post updated successfully",
                "status" => 200,
            ], 200);
        } else {
            return response()->json([
                "message" => "Post updated fail",
                "status" => 409,
            ], 409);
        }
    }

    public function destroy(string $id)
    {
        $post = Post::find($id);
        $res = $post->delete();

        if ($res) {
            return response()->json([
                "message" => "Post deleted successfully",
                "status" => 202,
            ], 202);
        } else {
            return response()->json([
                "message" => "Post already been deleted",
                "status" => 410,
            ], 410);
        }
    }
}
