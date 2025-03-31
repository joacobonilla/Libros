<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Libros</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Libros</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Género</th>
                    <th>Autor</th>
                    <th>Cantidad de Páginas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr>
                        <td>{{ $libro->id }}</td>
                        <td>{{ $libro->nombre }}</td>
                        <td>{{ $libro->genero }}</td>
                        <td>{{ $libro->autor }}</td>
                        <td>{{ $libro->cantidad_paginas }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('libros.create') }}" class="btn btn-primary">Agregar Nuevo Libro</a>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>