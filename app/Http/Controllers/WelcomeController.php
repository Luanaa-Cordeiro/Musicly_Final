<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artista;
use App\Models\Genero;
use App\Models\Album;
use App\Models\Musica;
use App\Models\Popular;
use App\Models\Welcome;

class WelcomeController extends Controller
{
    public readonly Popular $popular;

    public function __construct(){
        $this->popular = new Popular();
    }
    public function index()
    {
        $populars = Popular::with(['artista', 'album', 'genero', 'musica'])
        ->select('id', 'id_artista', 'id_album', 'id_genero', 'id_musica')
        ->get()
        ->map(function ($popular) {
            return [
                'id' => $popular->id,
                'Artista' => $popular->artista->nome,
                'Álbum' => $popular->album->nome,
                'Gênero' => $popular->genero->nome,
                'Musica' => $popular->musica->nome,
            ];
        });

        $popular = $this->popular->all();
        return view('welcome', ['populars' => $popular]);
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
