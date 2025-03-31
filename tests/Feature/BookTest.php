<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookTest extends TestCase
{
    
    public function testCanCreateLibro()
{
    $response = $this->postJson('/api/libros', [
        'nombre' => 'Título',
        'genero' => 'Género',
        'autor' => 'Autor',
        'cantidad_paginas' => 300,
    ]);

    $response->assertStatus(201);
}

public function testCanGetLibros()
{
    $response = $this->getJson('/api/libros');
    $response->assertStatus(200);
}
}
