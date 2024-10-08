<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model {
  use HasFactory;

  protected $fillable = [
    'nombres',
    'apellidos',
    'nacimiento'
  ];

  public function libros() {
    return $this->belongsToMany(Libro::class, 'detalle_autors', 'autor_id', 'libro_id');
  }
}
