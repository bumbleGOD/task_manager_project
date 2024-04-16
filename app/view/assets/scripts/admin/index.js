document.addEventListener("DOMContentLoaded", ()=>{
    const menuCollapse = document.getElementById("menu-desplegable");
    const miniMenuCollapse = document.querySelector(".barra-lateral");
    const spans = document.querySelectorAll("span");
    const darkMode = document.querySelector(".switch");
    const clickDarkMode = document.querySelector(".circulo");
    const moon = document.getElementById("moon");
    const navHorizontal = document.getElementById("nav-horizontal");
    
    menuCollapse.addEventListener("click", () => {
        miniMenuCollapse.classList.toggle("mini-barra-lateral");
        moon.classList.toggle("ocultar-luna");
    
        if (miniMenuCollapse.classList.contains("mini-barra-lateral")) {
            navHorizontal.style.width = "95%";
            navHorizontal.style.transition = "width 1s ease";
        } else {
            navHorizontal.style.width = "82%";
        }
    
        spans.forEach((span) => {
            span.classList.toggle("hidden");
        });
    });

    darkMode.addEventListener("click", ()=>{
        let body = document.body;

        body.classList.toggle("dark-mode");
        clickDarkMode.classList.toggle("prendido");
    });
});// esto es para la sidebar y la nav horizontal

