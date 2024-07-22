<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model {
  use HasFactory;
  protected $fillable = [
    'titulo',
    'codigo',
    'paginas',
    'resena',
    'categoria_id'
  ];
  public function categoria() {
    return $this->belongsTo(Categoria::class);
  }
}
