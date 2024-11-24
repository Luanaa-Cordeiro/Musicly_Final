<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'id_artista',
        'id_genero',
        'id_album',
    ];

    protected $table = 'musicas';

    public function artista()
    {
        return $this->belongsTo(Artista::class, 'id_artista', 'id');
    }

    public function album()
    {
        return $this->belongsTo(Album::class, 'id_album', 'id');
    }

    public function genero()
    {
        return $this->belongsTo(Genero::class, 'id_genero', 'id');
    }
}
