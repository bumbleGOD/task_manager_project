$(document).ready(function () {
  function actualizarEstado(){
    const secciones = document.querySelectorAll("section");
    secciones.forEach(seccion => {
      const rect = seccion.getBoundingClientRect();
      if(rect.top <= 75 && rect.bottom >= 10){
        const id = seccion.getAttribute("id");
        $(".nav-link").removeClass("active");
        $(".nav-link[href='#"+id+"']").addClass("active");
      }
    });
  }

  actualizarEstado();
  $(window).scroll(function () { 
    actualizarEstado();
  });
});//selector nav

document.addEventListener("DOMContentLoaded", function () {
  const navbar = document.getElementById("navbar-show-controller");

  function showNavbar(){
    const navbarCollapse = document.getElementById("navbar-show");
    navbarCollapse.classList.toggle("show");
  }

  navbar.addEventListener("click", showNavbar);
});//mostrar nav responsiva

window.addEventListener("load", function(){
    const img = document.getElementById("img-principal");

    img.style.transition = "opacity 1.5s";
    img.style.opacity = "1";
});//cargar imagen transitiva (para mejor apariencia)

document.addEventListener("DOMContentLoaded", function () {
  const box = document.getElementById("text-section");

  setTimeout(function () {
    box.style.top = "50%";
  }, 10);
});//esto es para darle animacion a la caja que hay en el portal de entrada de la pagina