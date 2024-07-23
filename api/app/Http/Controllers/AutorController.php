<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller {
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request) {
    $limit = $request->input('limit', 1) * 10;
    $nombreApellido = $request->input('nombreApellido');

    $query = Autor::query();

    if ($nombreApellido) {
      $query->where(function ($q) use ($nombreApellido) {
        $q->where('nombres', 'like', "%{$nombreApellido}%")
          ->orWhere('apellidos', 'like', "%{$nombreApellido}%");
      });
    }

    $autores = $query->paginate($limit);

    return response()->json($autores, 200);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create() {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request) {
    //
  }

  /**
   * Display the specified resource.
   */
  public function show(Autor $autor) {
    $res = Autor::where('id', $autor->id)->get();
    if (isset($res)) {
      return response()->json([
        'data' => $res,
        'mensaje' => "Autor encontrado"
      ]);
    } else {
      return response()->json([
        'error' => true,
        'mensaje' => "Autor no encontrado"
      ]);
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Autor $autor) {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Autor $autor) {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Autor $autor) {
    //
  }
}
