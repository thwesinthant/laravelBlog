<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

use App\Http\Requests\StoreReplyRequest;
use App\Http\Requests\UpdateReplyRequest;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        dd($request->reply_id);
        $request->validate(
            [
                "comment" => 'required',
                "user_id" => 'required',
                "post_id" => 'required',
                "reply_id" => 'required',
            ]
        );

        if ($request->reply_id > 0) {
            $newReply = ([
                'comment' => $request['comment'],
                'user_id' => $request['user_id'],
                'post_id' => $request['post_id'],
                'reply_id' => $request['reply_id']
            ]);
            Reply::create($newReply);
        }
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(Reply $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReplyRequest $request, Reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reply $reply)
    {
        //
    }
}
