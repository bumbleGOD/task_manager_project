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

window.addEventListener("load", ()=>{
    const h2 = document.querySelectorAll(".sidebar h2");

    h2.forEach((h2)=>{
        h2.style.left = "0%";
    });
});


let cajaActual = null;

function mostrar(id) {
    if (cajaActual) {
        cajaActual.style.display = "none";
    }

    const cajaMostrar = document.getElementById(id);

    if (cajaMostrar) {
        cajaMostrar.style.display = "block";
        cajaActual = cajaMostrar;
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const links = document.querySelectorAll(".sidebar ul a");

    links.forEach((link) => {
        link.addEventListener("click", (event) => {
            event.preventDefault(); // Evita que el enlace navegue a otra página
            const id = link.getAttribute("href").substring(1); // Obtiene el ID del enlace
            
            // Remueve la clase 'active' de todos los enlaces
            links.forEach((l) => {
                l.classList.remove("active");
            });
            
            // Agrega la clase 'active' al enlace clicado
            link.classList.add("active");

            mostrar(id);
        });
    });

    mostrar('dashboard');
});