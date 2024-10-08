<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonaController extends Controller {
  /**
   * Display a listing of the resource.
   */
  public function index(Request $request) {
    $limit = $request->input('limit', 1) * 10;
    $nombreApellido = $request->input('nombreApellido');
    $tipo_id = $request->input('tipo');

    $query = Persona::with('tipo:id,descripcion');

    if ($tipo_id) {
      $query->where('tipo_id', $tipo_id);
    }

    if ($nombreApellido) {
      $query->where(function ($q) use ($nombreApellido) {
        $q->where('nombres', 'like', "%{$nombreApellido}%")
          ->orWhere('apellidos', 'like', "%{$nombreApellido}%");
      });
    }

    $autores = $query->orderBy('id', 'desc')->paginate($limit);

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
    $validator = Validator::make($request->all(), [
      'nombres' => 'required|string|max:255',
      'apellidos' => 'required|string|max:255',
      'celular' => 'required|string|max:255',
      'tipo_id' => 'required|exists:tipos,id'
    ], [
      'required' => ':attribute es requerido',
    ]);

    if ($validator->fails()) {
      return response()->json([
        'error' => true,
        'mensaje' => 'Errores de validación',
        'errors' => $validator->errors()
      ], 422);
    }

    $persona = new Persona();
    $persona->nombres = $request->input('nombres');
    $persona->apellidos = $request->input('apellidos');
    $persona->celular = $request->input('celular');
    $persona->tipo_id = $request->input('tipo_id');

    if ($persona->save()) {
      return response()->json([
        'data' => $persona,
        'mensaje' => 'Creado exitosamente'
      ]);
    } else {
      return response()->json([
        'error' => true,
        'mensaje' => 'Error al crear'
      ], 500);
    }
  }

  /**
   * Display the specified resource.
   */
  public function show(Persona $persona) {
    $res = Persona::with('tipo:id,descripcion')->where('id', $persona->id)->get();
    if (isset($res)) {
      return response()->json([
        'data' => $res,
        'mensaje' => "Persona encontrado"
      ]);
    } else {
      return response()->json([
        'error' => true,
        'mensaje' => "Persona no encontrado"
      ]);
    }
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Persona $persona) {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Persona $persona) {
    $validator = Validator::make($request->all(), [
      'nombres' => 'required|string|max:255',
      'apellidos' => 'required|string|max:255',
      'celular' => 'required|string|max:255',
      'tipo_id' => 'required|exists:tipos,id'
    ], [
      'required' => ':attribute es requerido',
    ]);

    if ($validator->fails()) {
      return response()->json([
        'error' => true,
        'mensaje' => 'Errores de validación',
        'errors' => $validator->errors()
      ], 422);
    }

    $persona->nombres = $request->input('nombres');
    $persona->apellidos = $request->input('apellidos');
    $persona->celular = $request->input('celular');
    $persona->tipo_id = $request->input('tipo_id');

    if ($persona->save()) {
      return response()->json([
        'data' => $persona,
        'mensaje' => 'Actualizado exitosamente'
      ]);
    } else {
      return response()->json([
        'error' => true,
        'mensaje' => 'Error al actualizar'
      ], 500);
    }
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Persona $persona) {
    try {
      $res = $persona->delete();
      if ($res) {
        return response()->json([
          'data' => $persona,
          'mensaje' => "Eliminado correctamente"
        ]);
      } else {
        return response()->json([
          'error' => true,
          'mensaje' => "Error al eliminar"
        ]);
      }
    } catch (\Illuminate\Database\QueryException $e) {
      if ($e->getCode() == "23000") {
        return response()->json([
          'error' => true,
          'mensaje' => "Hay prestamos relacionados a esta persona",
          'detalle' => $e->getMessage()
        ]);
      }

      return response()->json([
        'error' => true,
        'mensaje' => "Error al eliminar el libro"
      ]);
    }
  }
}
