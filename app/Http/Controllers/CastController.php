<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cast = Cast::all();
        return view('cast.index', compact ('cast'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cast.create');
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
    		'nama' => 'required',
    		'umur' => 'required',
            'bio' => 'required',
    	]);
 
        Cast::create([
    		'nama' => $request->nama,
    		'umur' => $request->umur,
            'bio' => $request->bio,

    	]);
 
    	return redirect('cast');
    }

   /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('cast.show', compact ('value'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     
    public function edit($id)
    {
        $cast = Cast::findOrFail($id);
        return view('cast.edit', compact ('cast'));
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
            'nama',
            'umur',
            'bio',
        ]);

        $cast = Cast::find($id);
        $cast->nama = $request->nama;
        $cast->umur = $request->umur;
        $cast->bio = $request->bio;
        $cast->update();
        return redirect('cast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $cast = Cast::find($id);
        $cast->delete();
        return back();
    }
}
