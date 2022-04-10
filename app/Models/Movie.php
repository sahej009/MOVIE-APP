<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'synopsis', 'date_de_sortie'];

    public function realisateur(){
        return $this->belongsTo(Realisateur::class);
    }
}
