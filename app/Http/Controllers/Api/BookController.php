<?php

namespace App\Http\Controllers\Api;

use App\Models\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Listar todos los libros
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }

    // Mostrar un libro específico por ID
    public function show($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Libro no encontrado'], 404);
        }
        return response()->json($book);
    }

    // Crear un nuevo libro
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'cantidad_paginas' => 'required|integer',
        ]);

        $book = Book::create($request->all());
        return response()->json($book, 201);
    }

    // Actualizar un libro existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'string|max:255',
            'genero' => 'string|max:255',
            'autor' => 'string|max:255',
            'cantidad_paginas' => 'integer',
        ]);

        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Libro no encontrado'], 404);
        }

        $book->update($request->all());
        return response()->json($book);
    }

    // Eliminar un libro
    public function destroy($id)
    {
        $book = Book::find($id);
        if (!$book) {
            return response()->json(['message' => 'Libro no encontrado'], 404);
        }

        $book->delete();
        return response()->json(['message' => 'Libro eliminado']);
    }
}