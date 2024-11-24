<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'id_artista',
    ];

    protected $table = 'albums';

    public function artista()
    {
        return $this->belongsTo(Artista::class, 'id_artista', 'id');
    }
}
