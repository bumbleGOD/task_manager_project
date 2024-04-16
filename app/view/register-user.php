<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles/user/login-register.css">
    <script defer src="assets/scripts/user/register.js"></script>
    <script defer src="https://kit.fontawesome.com/1b1a22b128.js" crossorigin="anonymous"></script>
    <script defer src="assets/scripts/jQuery/jquery-3.7.1.min.js"></script>
    <link rel="shortcut icon" href="assets/images/task-logo-removebg-preview-icon.png" type="image/x-icon">
    <title>TaskManager</title>
</head>

<body id="body-register">
    <form action="" method="post" class="bg-white p-4 container row my-auto" id="register-form">
        <div class="mb-4 content d-flex flex-row">
            <span class="w-auto span-back"><a class="text-dark" href="../../public_html/index.php"><i class="fa-solid fa-arrow-left">Volver</i></a></span>
            <span class="span-register w-auto">Registro</span>
        </div>
        <hr>
        <div class="mb-3 col-lg-6">
            <label for="name-user" class="form-label">Nombre:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                <input type="text" class="form-control" name="name_user" id="name-user" aria-describedby="emailHelp" placeholder="Ingresa tu nombre/s" required>
            </div>
        </div>
        <div class="mb-3 col-lg-6">
            <label for="lastName-user" class="form-label">Apellido:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                <input type="text" class="form-control" name="lastName_user" id="lastName-user" aria-describedby="emailHelp" placeholder="Ingresa tu apellido/s" required>
            </div>
        </div>
        <div class="mb-3 col-lg-6">
            <label for="age-user" class="form-label">Edad:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                <input type="text" class="form-control" name="age_user" id="age-user" aria-describedby="emailHelp" maxlength="2" placeholder="Ingresa tu edad, debes ser mayor a 15 años" required>
            </div>
        </div>
        <div class="mb-3 col-lg-6">
            <label for="username-user" class="form-label">Nombre de usuario:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                <input type="text" class="form-control" name="username_user" id="username-user" aria-describedby="emailHelp" placeholder="Crea un nombre de usuario para tu cuenta" required>
            </div>
        </div>
        <div class="mb-3 col-lg-6">
            <label for="email-user" class="form-label">Email:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" class="form-control" id="email-user" name="email_user" aria-describedby="emailHelp" placeholder="Ingresa tu correo" required>
            </div>
        </div>
        <div class="mb-3 col-lg-6">
            <label for="number-user" class="form-label">Número:</label>
            <div class="input-group">
                <input class="input-group-text p-0" placeholder="+XX" name="indicativo_user" id="indicativo-user" style="width: 55px;" required title="ingresa tu indicativo" maxlength="3">
                <input type="text" class="form-control" id="number-user" name="number_user" aria-describedby="emailHelp" placeholder="Ingresa tu número de celular" required maxlength="10">
            </div>
        </div>
        <div class="mb-3 col-lg-6">
            <label for="password-user" class="form-label">Contraseña:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                <input type="password" class="form-control" id="password-user" name="password_user" placeholder="Crea tu contraseña" required>
            </div>
        </div>
        <div class="mb-4 col-lg-6">
            <label for="repeat-password-user" class="form-label">Repite tu contraseña:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                <input type="password" class="form-control" id="repeat-password-user" placeholder="Repite tu contraseña" required>
            </div>
        </div>
        <hr>
        <div class="mb-1 my-3 col-lg-6 register-form-send">
            <button type="submit" name="taskManager_register_button" class="btn btn-dark container-fluid">Registrarse</button>
        </div>
        <div class="mb-3 container-fluid d-flex justify-content-center">
            <span class="span-account">¿Ya tienes cuenta? <a href="login-user.php">Ingresa aquí</a></span>
        </div>
    </form>
</body>

</html>
<?php

require_once(__DIR__ . "/../controller/user-controller/loginRegister.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    $register = new LoginRegisterController();

    if (!isset($_POST['taskManager_register_button'])) {
        $register->registerController();
    }
}

?>