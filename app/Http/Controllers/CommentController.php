<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Reply;

use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                "message" => 'required',
                "user_id" => 'required',
                "post_id" => 'required',
                "main_comment_id" => 'required',
            ]
        );

        if ($request->main_comment_id == 0) {
            $newComment = ([
                'comment' => $request['message'],
                'user_id' => $request['user_id'],
                'post_id' => $request['post_id'],
                'reply_id' => $request['main_comment_id'],
            ]);
            Comment::create($newComment);
        } else {
            $newReply = ([
                'reply' => $request['message'],
                'comment_id' => $request['main_comment_id'],
                'user_id' => $request['user_id'],
            ]);
            Reply::create($newReply);
        }
        return redirect()->back();
    }

    public function show(Comment $comment)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
