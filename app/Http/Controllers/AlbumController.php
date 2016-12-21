<?php

namespace App\Http\Controllers;

use App\Album;
use App\Band;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @todo sorting functionality is 
     * duplicated from BandController
     * will need to refactor.
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $sort = $request->get('sort');
        $order = $request->get('order');
  
        $bands = Band::all();

        $filter = $request->get('filter_band');


        if ($sort && $order) {
           $albums = Album::orderBy($sort, $order)->get();
        } else {

          $albums = Album::orderBy('name', 'desc')->get();
        }

        if ($filter) {
          $albums = Album::search($filter)->get();
        }

        return view('album.index', [
            'albums' => $albums,
            'bands'  => $bands,
            'sort'   => $sort,
            'order'  => $order
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bands = Band::all();

        return view('album.create', ['bands' => $bands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'         => 'required|max:255',
            'select_band'  => 'required'
        ]);

        $album = new Album;
        $album->band_id          = $request->select_band;
        $album->name             = $request->name;
        $album->recorded_date    = $request->recorded_date;
        $album->release_date     = $request->release_date;
        $album->number_of_tracks = $request->number_of_tracks;
        $album->label            = $request->label;
        $album->producer         = $request->producer;
        $album->genre            = $request->genre;

        $album->save();

        return redirect('/albums')->with('success', 'Added Album Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::findOrFail($id);

        return view('album.detail', ['album' => $album]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::findOrFail($id);
        $bands = Band::all();

        return view('album.edit', [
            'album' => $album, 
            'bands' => $bands
        ]);
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
        $this->validate($request, [
            'name'          => 'required|max:255',
            'select_band'   => 'required'
        ]);

        $album = Album::find($id);

        $album->band_id          = $request->select_band;
        $album->name             = $request->name;
        $album->recorded_date    = $request->recorded_date;
        $album->release_date     = $request->release_date;
        $album->number_of_tracks = $request->number_of_tracks;
        $album->label            = $request->label;
        $album->producer         = $request->producer;
        $album->genre            = $request->genre;

        $album->save();

        return redirect('/albums')->with('success', 'Updated Album Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $album = Album::find($id);

        $album->delete(); 

        return redirect('/albums')->with('delete', 'Album has been deleted!');
    }
}
