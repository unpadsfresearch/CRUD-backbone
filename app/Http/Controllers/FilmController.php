<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;
use App\Models\Review;
use File;

class FilmController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $film = Film::all();
        return view('film.index', compact ('film'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genre = Genre::get();
        return view('film.create', ['genre' => $genre]);
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'judul' => 'required',
    		'ringkasan' => 'required',
            'tahun' => 'required',
            'poster'=> 'nullable|mimes:jpg,png,jpeg,webp',
            
    	]);

        /** Image Upload */
        $fileName = time().'.'.$request->poster->extension();
        $request->poster->move(public_path('images'), $fileName);
 
        Film::create([
    		'judul' => $request->judul,
    		'ringkasan' => $request->ringkasan,
            'tahun' => $request->tahun,
            'poster' => $fileName,
            'genre_id' => $request->genre,

    	]);
 
    	return redirect('film');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::get();
        $film = Film::find($id);
        return view('film.show', ['film' => $film, 'review' => $review]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     
    public function edit($id)
    {
        $film = Film::findOrFail($id);
        $genre = Genre::get();
        return view('film.edit', ['film' => $film, 'genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul',
            'ringkasan',
            'tahun',
            'poster'=> 'image|mimes:jpg, jpeg, webm, png, heic',
            'genre_id'
        ]);
        
        $film = Film::find($id);

        if($request->has('poster'))
            {
                $path = 'images/';
                File::delete($path. $film->poster);

                $fileName = time().'.'.$request->poster->extension();
                $request->poster->move(public_path('images'), $fileName);

                $film->poster = $fileName;
                $film->save();
            }


        $film->judul = $request->judul;
        $film->ringkasan = $request->ringkasan;
        $film->tahun = $request->tahun;
        $film->genre_id = $request->genre;
        $film->update();
        return redirect('film');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $film = Film::find($id);
        /** $review = Review::find($id); */
       
        $path = 'images/';
        File::delete($path . $film->poster);

        /** $film->review; */ 
        $film->delete();
        return redirect('film');
    }





}
