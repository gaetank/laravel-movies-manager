<?php

namespace App\Http\Controllers;
use App\Movie;
use App\Realisator;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show() {
        $realisators = Realisator::all();
        return view('movies.form')->with(['realisators' => $realisators]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title'        => 'required|max:255',
            'description' => 'required',
            'prix' => 'required',
            'image' => 'required',
            
        ]);
        $path = '';
        if ($request->file('image') !== NULL) {
            $path = $request->file('image')->store('public/images');
        }    
        //dd($request->all());
        $movie = Movie::create([
            'title'        => request('title'),
            'description' => request('description'),
            'image'        => $path,
            'prix' => request('prix'),
            'trailer' => request('trailer'),
            'realisator_id' => intval(request('realisators')),
        ]);
    
        return response()->json([
            'Movie'    => $movie,
            'message' => 'Success'
        ], 200);
    }
}
