<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $favourites = Favourite::all();
        return view('favourites.index', compact('favourites'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate(
            [
                "user_id" => 'required',
                "post_id" => 'required',
            ]
        );

        $a = Favourite::where('user_id', '=', $request->user_id)->where('post_id', '=', $request->post_id)->first();
        // return $a;

        if (!$a) {
            $addToFavourite['user_id'] = $request->user_id;
            $addToFavourite['post_id'] = $request->post_id;
            $addToFavourite = $request->all();
            // return $addToFavourite;
            Favourite::create($addToFavourite);
            return redirect()->back()->with('success', "Add to Favourite");
        } else {
            $a->delete();
            return redirect()->back()->with('success', "Remove From Favourite");
        }
    }
    public function destroy(Favourite $favourite)
    {
        $favourite->delete();
        return redirect()->back()->with('success', 'Remove from favourite list  success 🥳');
    }
}
