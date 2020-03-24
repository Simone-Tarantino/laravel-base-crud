<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;

class VideogameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videogames = Videogame::all();
        // dd($videogames);
        return view('videogames.index', compact('videogames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('videogames.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'software_house' => 'required|string',
            'genre' => 'required|string',
            'release_date' => 'required|date',
            'price' => 'required|numeric'
        ]);

        $data = $request->all();
        $videogame = new Videogame;
        // $videogame->title = $data['title'];
        // $videogame->software_house = $data['software_house'];
        // $videogame->genre = $data['genre'];
        // $videogame->release_date = $data['release_date'];
        // $videogame->price = $data['price'];
        $videogame->fill($data);
        $save = $videogame->save();

        if ($save == true)
        {
            return redirect()->route('videogames.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Videogame $videogame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
