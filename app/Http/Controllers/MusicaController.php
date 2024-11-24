<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Musica; 
use App\Models\Album; 
use App\Models\Genero; 
use App\Models\Artista; 
use App\Http\Requests\StoreMusica;


class MusicaController extends Controller
{
    public readonly Musica $musica;

    public function __construct(){
        $this->musica = new Musica();
    }

    public function index()
    {

        $musicas = Musica::with(['artista', 'album', 'genero'])
        ->select('id', 'nome', 'id_artista', 'id_album', 'id_genero')
        ->get()
        ->map(function ($musica) {
            return [
                'id' => $musica->id,
                'nome' => $musica->nome,
                'Artista' => $musica->artista->nome,
                'Álbum' => $musica->album->nome,
                'Gênero' => $musica->genero->nome,
            ];
        });

        $musica = $this->musica->all();
        return view('musicas', ['musicas' => $musica]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistas = Artista::all();
        $albuns = Album::all();
        $generos = Genero::all();
        return view('musica_create', [
            'artistas' => $artistas,
            'albuns' => $albuns,
            'generos' => $generos
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMusica $request)
    {
        $created = $this->musica->create([
            'nome' => $request->input('nome'), 
            'id_artista' => $request->input('id_artista'), 
            'id_genero' => $request->input('id_genero'), 
            'id_album' => $request->input('id_album'), 
        ]);

        if($created){
           return redirect()->route('musicas.index')->with('message', 'Álbum "' . $created->nome  . '" criado com sucesso');
        }

        return redirect()->route('musicas.index')->with('message','Erro ao criar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Musica $musica)
    {
        return view('musica_show',['musicas' => $musica]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Musica $musica)
    {
        $artistas = Artista::all();
        $generos = Genero::all();
        $albuns = Album::all();
        return view('musica_edit', [
            'musicas' => $musica,
            'artistas' => $artistas,
            'generos' => $generos,
            'albuns' => $albuns,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->musica->where('id', $id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->route('musicas.index')->with('message','Atualizado com sucesso');
        }

        return redirect()->route('musicas.index')->with('message','Erro ao atualizar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->musica->where('id',$id)->delete();

        return redirect()->route('musicas.index')->with('message','Deletado com sucesso');
    }
}
