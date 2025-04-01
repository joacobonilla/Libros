document.addEventListener("DOMContentLoaded", function () {
    console.log("Aplicación cargada correctamente");

    // Ejemplo de manejo de eventos
    const btn = document.getElementById("miBoton");
    if (btn) {
        btn.addEventListener("click", function () {
            alert("Botón clickeado!");
        });
    }

    // Ejemplo de manipulación de elementos
    const titulo = document.getElementById("titulo");
    if (titulo) {
        titulo.style.color = "blue";
    }
});




