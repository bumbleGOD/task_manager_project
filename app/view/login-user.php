<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles/user/login-register.css">
    <script defer src="assets/scripts/user/login.js"></script>
    <script defer src="https://kit.fontawesome.com/1b1a22b128.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/images/task-logo-removebg-preview-icon.png" type="image/x-icon">
    <title>TaskManager</title>
</head>

<body id="body-login">
    <form action="" method="post" class="bg-white p-4 login-form col-md-9 col-lg-7 d-flex flex-column" id="login-form">
        <div class="mb-3 content d-flex flex-row position-relative">
            <span class="span-back col-2 position-absolute"><a class="text-dark" href="../../public_html/index.php"><i class="fa-solid fa-arrow-left"><span class="back-text">Volver</span></i></a></span>
            <span class="span-login col-12"><span style="border-bottom: 3px solid black;">Iniciar sesión</span></span>
        </div>
        <hr>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                <input type="email" class="form-control" name="email_user" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu correo" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-unlock"></i></span>
                <input type="password" class="form-control" name="password_user" id="exampleInputPassword1" placeholder="Ingresa tu contraseña" required>
            </div>
        </div>
        <hr>
        <div class="mb-2 my-3 col-lg-6 login-send">
            <button class="btn btn-dark container-fluid" type="submit" name="taskManager_login_form">Iniciar Sesión</button>
        </div>
        <div class="mb-3 container-fluid d-flex justify-content-center">
            <span class="span-account">¿No tienes cuenta? <a href="register-user.php">Registrate aquí</a></span>
        </div>
    </form>
</body>

</html>
<?php

require_once (__DIR__ . "/../controller/user-controller/loginRegister.php");

if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)){
    $login = new LoginRegisterController();

    if(isset($_POST['taskManager_login_form'])){
        $login->loginController();
    }
}

?>