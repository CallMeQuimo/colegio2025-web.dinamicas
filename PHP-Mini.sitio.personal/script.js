// script.js

// Esperar a que el contenido de la página cargue completamente
document.addEventListener("DOMContentLoaded", function() {
    // Obtener referencia al botón por su ID
    const boton = document.getElementById("btnSaludo");

    // Agregar evento click al botón
    boton.addEventListener("click", function() {
        alert("¡Hola! Gracias por visitar mi perfil 😊");
    });
});
