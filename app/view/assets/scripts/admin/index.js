document.addEventListener("DOMContentLoaded", ()=>{
    const botonActualizarTamaño = document.getElementById('boton-actualizar-tamaño');
    const sidebar = document.querySelector(".sidebar");
    const spans = document.querySelectorAll(".sidebar span");
    const mainContent = document.querySelector(".main-content");

    botonActualizarTamaño.addEventListener("click", ()=>{
        sidebar.classList.toggle("mini-sidebar");
        spans.forEach((span)=>{
            span.classList.toggle("hidden");
        });
        mainContent.classList.toggle("main-content-grande");
    });
});
