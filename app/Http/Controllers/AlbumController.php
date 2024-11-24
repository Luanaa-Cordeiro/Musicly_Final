<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Album; 
use App\Models\Artista; 
use App\Http\Requests\StoreAlbum;

class AlbumController extends Controller
{
    public readonly Album $album;

    public function __construct(){
        $this->album = new Album();
    }

    public function index()
    {

        $albuns = Album::with('artista')
        ->select('id', 'nome', 'id_artista')
        ->get()
        ->map(function ($album) {
            return [
                'id' => $album->id,
                'nome' => $album->nome,
                'artista' => $album->artista->nome,
            ];
        });

        $artistas = Artista::all();
        $album = $this->album->all();
        return view('albuns',['albuns' => $album], ['artistas' => $artistas]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artistas = Artista::all();
        return view('album_create', ['artistas' => $artistas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlbum $request)
    {
        $created = $this->album->create([
            'nome' => $request->input('nome'), 
            'id_artista' => $request->input('id_artista'), 
        ]);

        if($created){
           return redirect()->route('albuns.index')->with('message', 'Álbum "' . $created->nome  . '" criado com sucesso');
        }

        return redirect()->route('albuns.index')->with('message','Erro ao criar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('album_show',['albuns' => $album]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        $artistas = Artista::all();
        return view('album_edit', ['albuns' => $album], ['artistas' => $artistas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->album->where('id', $id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->route('albuns.index')->with('message','Atualizado com sucesso');
        }

        return redirect()->route('albuns.index')->with('message','Erro ao atualizar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->album->where('id',$id)->delete();

       return redirect()->route('albuns.index')->with('message','Deletado com sucesso');
    }
}
