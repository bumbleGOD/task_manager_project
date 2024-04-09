<?php
session_name("session-error");
session_start();

if(isset($_SESSION["account-equals"]) && $_SESSION["account-equals"] === true){
    echo "<script>alert('¡No puedes crear una cuenta que ya existe!')</script>";

    unset($_SESSION["account-equals"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles/user/login-register.css">
    <script defer src="assets/scripts/user/login-register.js"></script>
    <script defer src="https://kit.fontawesome.com/1b1a22b128.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/images/task-logo-removebg-preview-icon.png" type="image/x-icon">
    <title>TaskManager</title>
</head>

<body>
    <form action="../controller/user/register-controller.php" method="post" class="bg-white p-4 container row my-auto" id="register-form">
        <div class="mb-4 content d-flex flex-row">
            <span class="w-auto span-back"><a class="text-dark" href="../../public_view/index.php"><i class="fa-solid fa-arrow-left">Volver</i></a></span>
            <span class="span-register w-auto">Registro</span>
        </div>
        <hr>
        <div class="mb-3 col-lg-6">
            <label for="exampleInputEmail1" class="form-label">Nombre:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                <input type="text" class="form-control" name="name_user" aria-describedby="emailHelp" placeholder="Ingresa tu nombre/s" required>
            </div>
        </div>
        <div class="mb-3 col-lg-6">
            <label for="exampleInputEmail1" class="form-label">Apellido:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                <input type="text" class="form-control" name="lastName_user" aria-describedby="emailHelp" placeholder="Ingresa tu apellido/s" required>
            </div>
        </div>
        <div class="mb-3 col-lg-6">
            <label for="exampleInputEmail1" class="form-label">Edad:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                <input type="text" class="form-control" name="age_user" id="age-user" aria-describedby="emailHelp" maxlength="2" placeholder="Ingresa tu edad, debes ser mayor a 15 años" required oninput="onlyNumbers(this)">
            </div>
        </div>
        <div class="mb-3 col-lg-6">
            <label for="exampleInputEmail1" class="form-label">Nombre de usuario:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                <input type="text" class="form-control" name="username_user" aria-describedby="emailHelp" placeholder="Crea un nombre de usuario para tu cuenta" required>
            </div>
        </div>
        <div class="mb-3 col-lg-6">
            <label for="exampleInputEmail1" class="form-label">Email:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" class="form-control" id="" name="email_user" aria-describedby="emailHelp" placeholder="Ingresa tu correo" required>
            </div>
        </div>
        <div class="mb-3 col-lg-6">
            <label for="exampleInputEmail1" class="form-label">Número:</label>
            <div class="input-group">
                <input class="input-group-text p-0" placeholder="+XX" name="indicativo_user" style="width: 55px;" required title="ingresa tu indicativo" maxlength="3">
                <input type="text" class="form-control" id="number-user" name="number_user" aria-describedby="emailHelp" placeholder="Ingresa tu número de celular" required oninput="onlyNumbers(this)" maxlength="10">
            </div>
        </div>
        <div class="mb-3 col-lg-6">
            <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                <input type="password" class="form-control" id="password-user" name="password_user" placeholder="Crea tu contraseña" required>
            </div>
        </div>
        <div class="mb-4 col-lg-6">
            <label for="exampleInputPassword1" class="form-label">Repite tu contraseña:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                <input type="password" class="form-control" id="repeat-password-user" placeholder="Repite tu contraseña" required>
            </div>
        </div>
        <hr>
        <div class="mb-1 my-3 col-lg-6 register-form-send">
            <button class="btn btn-dark container-fluid" type="submit" name="register_form_user">Registrarse</button>
        </div>
        <div class="mb-3 container-fluid d-flex justify-content-center">
            <span class="span-account">¿Ya tienes cuenta? <a href="login-user.php">Ingresa aquí</a></span>
        </div>
    </form>
</body>

</html>