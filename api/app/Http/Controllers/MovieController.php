<?php

namespace App\Http\Controllers;

use App\Http\Resources\Basic as BasicResource;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::get();
        return BasicResource::collection($movies);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // get movie
        $movie = Movie::find($id);

        if (! $movie) {
            return response()->json(['message' => "Movie doesn't exist"], 404);
        }

        // return category resource
        return new BasicResource($movie);
    }
}
