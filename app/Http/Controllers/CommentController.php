<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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
                "comment" => 'required',
                "user_id" => 'required',
                "post_id" => 'required',
            ]
        );

        $newComment = ([
            'comment' => $request['comment'],
            'user_id' => $request['user_id'],
            'post_id' => $request['post_id'],
            // 'ordering_secondary' => $request['ordering_secondary'],
        ]);

        $idd = $request->post_id;
        // dd($idd);

        $commentTable =
            Comment::where('post_id', $idd)->get();
        // dd($commentTable);

        foreach ($commentTable as $comment) {

            if ($request->reply_id > 0) {
                $parent_ordering = DB::table('comments')->where('id', $request->reply_id)->value('ordering');

                $newComment['ordering'] =
                    $parent_ordering;

                $fetch_sameOrdering =
                    DB::table('comments')->where('ordering', $parent_ordering)->get();
                $rowCount_of_sameordering = $fetch_sameOrdering->count();
                // dd($rowCount_of_sameordering);

                $newComment['ordering_secondary'] = $rowCount_of_sameordering;
            } else {
                $newComment['ordering'] = ++$comment->ordering;
                // $newComment['ordering'] = 0;
                $newComment['ordering_secondary'] = 0;
            }

            // dd($comment->ordering);
        }
        // }


        // add +1 to ordering secondary if reply_id exists


        Comment::create($newComment);

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




// if ($request->reply_id === "0") {
//     if ($comment->ordering >= 0) {
//         $newComment['ordering'] = ++$comment->ordering;
//     }
// } else {
//     dd($comment->id);
//     if ($comment->id === $request->reply_id) {
//         $newComment['ordering'] = $comment->ordering;
//     }
// }
