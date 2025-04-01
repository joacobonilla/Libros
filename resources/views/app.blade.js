document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('book-form');
    const bookList = document.getElementById('book-list');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        
        const formData = new FormData(form);
        const bookData = {
            id: formData.get('id'),
            nombre: formData.get('nombre'),
            genero: formData.get('genero'),
            autor: formData.get('autor'),
            cantidad_paginas: formData.get('cantidad_paginas')
        };

        const response = await fetch('http://tu-api-url/libros', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(bookData)
        });

        if (response.ok) {
            cargarLibros();
        }
    });

    async function cargarLibros() {
        const response = await fetch('http://tu-api-url/libros');
        const libros = await response.json();
        bookList.innerHTML = '';
        
        libros.forEach(libro => {
            const li = document.createElement('li');
            li.textContent = `${libro.nombre} - ${libro.autor}`;
            bookList.appendChild(li);
        });
    }

    // Cargar libros al iniciar
    cargarLibros();
});