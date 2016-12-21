<?php

namespace App\Http\Controllers;

use App\Band;
use Illuminate\Http\Request;

class BandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sort = $request->get('sort');
        $order = $request->get('order');

        if ($sort && $order) {
           $bands = Band::orderBy($sort, $order)->get();
        } else {

          $bands = Band::orderBy('name', 'desc')->get();
        }

        return view('band.home', [
             'bands' => $bands, 
             'sort'  => $sort,
             'order' => $order
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('band.create');
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
            'name' => 'required'
        ]);

        Band::create($request->all());

        return redirect('/')->with('success', 'Successfully created band!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $band = Band::findOrFail($id);

        return view('band.detail', ['band' => $band]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $band = Band::find($id);

        return view('band.edit', ['band' => $band]);
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
            'name'  => 'required'
        ]);

        Band::find($id)->update($request->all());

        return redirect('/')->with('success', 'Succuessfully updated record!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $band = Band::find($id);

        $band->delete();
        // no need to do anything else, already deletes on cascade

        return redirect('/')->with('delete', 'Band has been deleted!');
    }
}
