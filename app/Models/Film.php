<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_film';
    // protected $table = 'films';

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'id_genre', 'id_genre');
    }
    public function distributeur()
    {
        return $this->belongsTo(Distributeur::class, 'id_distributeur', 'id_distributeur');
    }
}
