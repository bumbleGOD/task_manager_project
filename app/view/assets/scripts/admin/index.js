document.addEventListener("DOMContentLoaded", ()=>{
    const botonActualizarTamaño = document.getElementById('boton-actualizar-tamaño');
    const sidebar = document.querySelector(".sidebar");
    const span = document.querySelector(".sidebar h2 span");

    botonActualizarTamaño.addEventListener("click", ()=>{
        sidebar.classList.toggle("mini-sidebar");
        span.classList.toggle("hidden");
    });
});
