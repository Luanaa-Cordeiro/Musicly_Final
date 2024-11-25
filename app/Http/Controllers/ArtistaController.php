<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Artista; 
use App\Http\Requests\StoreRequest;

class ArtistaController extends Controller
{
    public readonly Artista $artista;

    public function __construct(){
        $this->artista = new Artista();
    }

    public function index()
    {
        $artista = $this->artista->all();
        return view('artistas',['artistas' => $artista]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artista_create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $created = $this->artista->create([
             'nome' => $request->input('nome'), 
         ]);
 
         if($created){
            return redirect()->route('artistas.index')->with('message', 'Artista "' . $created->nome  . '" criado com sucesso');
         }
 
         return redirect()->route('artistas.index')->with('message','Erro ao criar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artista $artista)
    {
        return view('artista_show',['artistas' => $artista]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artista $artista)
    {
        return view('artista_edit', ['artistas' => $artista]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRequest $request, string $id)
    {
        $updated = $this->artista->where('id', $id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->route('artistas.index')->with('message','Atualizado com sucesso');
        }

        return redirect()->route('artistas.index')->with('message','Erro ao atualizar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->artista->where('id',$id)->delete();

       return redirect()->route('artistas.index')->with('message','Deletado com sucesso');
    }
}
