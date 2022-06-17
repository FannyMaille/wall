<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_genre';
    // protected $table = 'genres';

    public function films()
    {
        return $this->hasMany(Film::class, 'id_genre', 'id_genre');
    }
}
