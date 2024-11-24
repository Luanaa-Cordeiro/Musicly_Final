<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artista;
use App\Models\Genero;
use App\Models\Album;
use App\Models\Musica;
use App\Models\Popular;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalArtistas = Artista::count();
        $totalGeneros = Genero::count();
        $totalAlbuns = Album::count();
        $totalMusicas = Musica::count();
        $totalPopulars = Popular::count();

        return view('home', [
            'total_artistas' => $totalArtistas,
            'total_generos' => $totalGeneros,
            'total_albuns' => $totalAlbuns,
            'total_musicas' => $totalMusicas,
            'total_popular' => $totalPopulars,
        ]);

        return view('home');

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
