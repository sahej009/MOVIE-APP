<?php

namespace App\Http\Controllers;

use App\Models\Realisateur;
use Illuminate\Http\Request;

class RealisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Realisateur  $realisateur
     * @return \Illuminate\Http\Response
     */
    public function show(Realisateur $realisateur)
    {
        return view('realisateur.show', ['realisateur' => $realisateur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Realisateur  $realisateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Realisateur $realisateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Realisateur  $realisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Realisateur $realisateur)
    {
        $data = $request->validate([
            'firstname' => 'string|required',
            'lastname' => 'string|required',
        ]);

        $realisateur->fill($data);
        $realisateur->save();
        return redirect()->route('realisateur.show', $realisateur);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Realisateur  $realisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Realisateur $realisateur)
    {
        $realisateur->delete();
        return redirect()->route('movie.index');
    }
}
