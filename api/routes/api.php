<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\MultaController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\PrestamoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post("register", [AuthController::class, 'register']);
Route::post("login", [AuthController::class, 'login']);

Route::get('testAPI', function () {
  return 'Api funcionando Correctamente';
});


Route::apiResource("libros", LibroController::class);
Route::apiResource("autores", AutorController::class);
Route::apiResource("prestamos", PrestamoController::class);
Route::apiResource("personas", PersonaController::class);
Route::apiResource("multa", MultaController::class);

// Route::middleware(['auth:sanctum'])->group(function () {
  // Route::apiResource("usuarios", UserController::class);
  // Route::apiResource("productos", ProductController::class);
  // Route::apiResource("categorias", CategoryController::class);


//   Route::post("logout", [AuthController::class, 'logout']);
// });
