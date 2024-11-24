<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Musica; 
use App\Models\Album; 
use App\Models\Genero; 
use App\Models\Artista; 
use App\Models\Popular; 
use App\Http\Requests\StorePopular;

class PopularController extends Controller
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

        /*$populars = Popular::with(['musica'])
        ->select('id','id_musica')
        ->get()
        ->map(function ($popular) {
            return [
                'id' => $popular->id,
                'Artista' => $popular->musica->artista->nome,
                'Álbum' => $popular->musica->album->nome,
                'Gênero' => $popular->musica->genero->nome,
                'Musica' => $popular->musica->nome,
            ];
        });*/

        $artistas = Artista::all();
        $albuns = Album::all();
        $generos = Genero::all();
        $musicas = Musica::all();
        $popular = $this->popular->all();
        return view('popular', [
            'populars' => $popular,
            'artistas' => $artistas,
            'albuns' => $albuns,
            'generos' => $generos,
            'musicas' => $musicas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistas = Artista::all();
        $albuns = Album::all();
        $generos = Genero::all();
        $musicas = Musica::all();
        return view('popular_create', [
            'artistas' => $artistas,
            'albuns' => $albuns,
            'generos' => $generos,
            'musicas' => $musicas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePopular $request)
    {
        $created = $this->popular->create([
            'id_musica' => $request->input('id_musica'), 
            'id_artista' => $request->input('id_artista'), 
            'id_genero' => $request->input('id_genero'), 
            'id_album' => $request->input('id_album'), 
        ]);

        if($created){
           return redirect()->route('populars.index')->with('message',  $created->musica->nome  . ' adicionado ao popular');
        }

        return redirect()->route('populars.index')->with('message','Erro ao criar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Popular $popular)
    {
        return view('popular_show',['populars' => $popular]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Popular $popular)
    {
        $artistas = Artista::all();
        $generos = Genero::all();
        $albuns = Album::all();
        $musicas = Musica::all();
        return view('popular_edit', [
            'musicas' => $musicas,
            'populars' => $popular,
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
        $updated = $this->popular->where('id', $id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->route('populars.index')->with('message','Atualizado com sucesso');
        }

        return redirect()->route('populars.index')->with('message','Erro ao atualizar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->popular->where('id',$id)->delete();

        return redirect()->route('populars.index')->with('message','Deletado com sucesso');
    }
}
