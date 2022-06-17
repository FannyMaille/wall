<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distributeur extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_distributeur';
    // protected $table = 'distributeurs';

    public function films()
    {
        return $this->hasMany(Film::class, 'id_distributeur', 'id_distributeur');
    }
}
