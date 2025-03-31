<?php

use App\Http\Controllers\Api\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'books'], function () {
    Route::get('/', [BookController::class, 'index']); // Listar todos los libros
    Route::post('/', [BookController::class, 'store']); // Agregar un nuevo libro
    Route::get('{id}', [BookController::class, 'show']); // Mostrar un libro específico
    Route::put('{id}', [BookController::class, 'update']); // Modificar un libro
    Route::delete('{id}', [BookController::class, 'destroy']); // Borrar un libro
});
Route::get('/libros', function () {
    $libros = App\Models\Book::all();
    return view('libros', compact('libros'));
});
