$(document).ready(function () {
  $("#link-inicio").click(function () {
    $("#link-inicio").addClass("active");
    $("#link-sobreNosotros").removeClass("active");
    $("#link-contacto").removeClass("active");
  });
  $("#link-sobreNosotros").click(function () {
    $("#link-sobreNosotros").addClass("active");
    $("#link-inicio").removeClass("active");
    $("#link-contacto").removeClass("active");
  });
  $("#link-contacto").click(function () {
    $("#link-contacto").addClass("active");
    $("#link-inicio").removeClass("active");
    $("#link-sobreNosotros").removeClass("active");
  });
}); // selector nav

document.getElementById("navbar-show-controller").addEventListener("click", function () {
  const navbarCollapse = document.getElementById("navbar-show");

  navbarCollapse.classList.toggle("show");
});
// nav responsiva
