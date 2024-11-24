<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    protected $table = 'artistas';

    public function albums()
    {
        return $this->hasMany(Album::class, 'id_artista', 'id');
    }
}
