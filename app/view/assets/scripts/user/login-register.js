function onlyNumbers(input){
    input.value = input.value.replace(/[^0-9]/g, "");
}

document.getElementById("age-user").addEventListener("input", function(){
    onlyNumbers(this);
});

document.getElementById("number-user").addEventListener("input", function(){
    onlyNumbers(this);
});// esto es para la edad y el número de celular

document.getElementById("register-form").addEventListener("submit", function(event){
    event.preventDefault();

    const age = document.getElementById("age-user").value;
    const password = document.getElementById("password-user").value;
    const passwordRepeat = document.getElementById("repeat-password-user").value;

    let sendForm = true;

    if(age <= 15){
        alert("No puedes registrarte siendo menor de 15 años");
        sendForm = false;
    }

    if(password !== passwordRepeat){
        alert("Las contraseñas no coinciden");
        sendForm = false;
    }

    if(sendForm){
        document.getElementById("register-form").submit();
    }
});// esto es para evitar que se envie el formulario cuando haya una edad invalida y las contraseñas
//no coincidan