<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Joke;

class JokeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jokes = Joke::all();
        $index = $request->id ?? 0;
        return view('jokes.index', ['jokes' => $jokes, 'index' => $index]);
    }

    public function nextJoke(Request $request)
    {
        $id = $request->id;
        $type = $request->type;

        $jokes = Joke::all();
        $nextIndex = $id + 1;

        if($type == 'like'){
            $jokes[$id]->likes += 1;
            
        } elseif($type == 'dislike'){
            $jokes[$id]->dislikes += 1;
        }
        $jokes[$id]->save();

        $nextJoke = $nextIndex < count($jokes) ? $jokes[$nextIndex] : ["content" => "That's all the jokes for today! Come back another day!"];

        Cookie::queue('jokeVoted_' . $id, true, 1440, null, null, null, false, false, null);

        return response()->json(['index' => $nextIndex, 'joke' => $nextJoke]);
    }
}
