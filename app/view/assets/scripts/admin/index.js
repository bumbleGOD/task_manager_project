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

}); // esto es para ajustar el tamaño de la sidebar cuando se le de el click ademas de ajustar el tamaño de la main-content (contenido principal)

window.addEventListener("load", ()=>{
    const desplazamientoTexto = document.querySelectorAll(".sidebar h2, .sidebar ul li, .sidebar .modo-oscuro");

    desplazamientoTexto.forEach((span)=>{
        span.style.left = "0%";
    });
}); //esto es para estilos cuando se cargue la pagina se vea una animacion de ordenamiento


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

document.addEventListener("DOMContentLoaded", ()=>{
    mostrar('dashboard');
}); // esto es para definir que caja si abre y se cierra cuando se le a un link de la sidebar, ademas que al cargar la pagina por defecto se va a la dashboard(inicio)

document.addEventListener("DOMContentLoaded", ()=>{
    const navLinks = document.querySelectorAll(".sidebar .nav-link");

    navLinks.forEach((link)=>{
        link.addEventListener("click", ()=>{
            navLinks.forEach((quitarFocus)=>{
                quitarFocus.classList.remove("active");
            });

            if(!link.href.includes("#dashboard")){
                link.classList.add("active");
            }
        });
    }); 
});//esto es para el focus de los elementos a de la nav

document.addEventListener("DOMContentLoaded", ()=>{
    const darkModeBoton = document.getElementById("dark-mode");
    const body = document.querySelector("body");
    const boton = document.getElementById("boton");

    darkModeBoton.addEventListener("click", ()=>{
        body.classList.toggle("dark-mode");
        if(body){
            boton.classList.toggle("on");
        }
    });
});// esto es para el modo oscuro de la dashboard