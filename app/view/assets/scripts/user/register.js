function onlyNumbers(button) {
  button.value = button.value.replace(/[^0-9]/g, "");
}

document.getElementById("age-user").addEventListener("input", function () {
  onlyNumbers(this);
});
document.getElementById("number-user").addEventListener("input", function () {
  onlyNumbers(this);
}); // esto es para la edad y el número de celular

document.addEventListener("DOMContentLoaded", function () {
  const indicativo = document.getElementById("indicativo-user");

  function indicativoPress(){
    const indicativoInput = this.value;

    if(indicativoInput === ""){
      return;
    }

    if(!indicativoInput.startsWith("+")){
      this.value = "+" + indicativoInput;
    }
  }

  indicativo.addEventListener("input", indicativoPress);
}); //esto es para el indicativo(ponga + al ingresar un indicativo automaticamente) C.U C.U PUMAS

document.getElementById("indicativo-user").addEventListener("input", function () {
  onlyNumbers(this);
}); //esto es para el indicativo

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("register-form").addEventListener("submit", function (event) {
      event.preventDefault();

      const age = document.getElementById("age-user").value;
      const password = document.getElementById("password-user").value;
      const passwordRepeat = document.getElementById(
        "repeat-password-user"
      ).value;

      let sendForm = true;

      if (age <= 15) {
        alert("No puedes registrarte siendo menor de 15 años");
        sendForm = false;
      }

      if (password !== passwordRepeat) {
        alert("Las contraseñas no coinciden");
        sendForm = false;
      }

      if (sendForm) {
        document.getElementById("register-form").submit();
      }
    });
}); // esto es para evitar que se envie el formulario cuando haya una edad invalida y las contraseñas
//no coincidan

window.addEventListener("load", function () {
  const box = document.getElementById("body-register");

  box.style.transition = "opacity 1s";
  box.style.opacity = "1";
});//esto es para darle presentacion al formulario (agregando un opacity transitivo)