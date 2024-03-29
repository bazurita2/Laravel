<?php

use App\Http\Controllers\Api\UsercrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('usuarioWs/usuarios', [UsercrudController::class, 'getAllUsers']);
Route::get('usuarioWs/usuario/leer/{id}', [UsercrudController::class, 'getUserById']);
Route::post('usuarioWs/usuario/crear', [UsercrudController::class, 'addUser']);
Route::put('usuarioWs/usuario/actualizar/{id}', [UsercrudController::class, 'updateUser']);
Route::delete('usuarioWs/usuario/borrar/{id}', [UsercrudController::class, 'deleteUser']);