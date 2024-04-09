<?php
session_name("session-success");
session_start();

if(isset($_SESSION["account-created"]) && $_SESSION["account-created"] === true){
    echo "<script>alert('Has creado tu cuenta satisfactoriamente')</script>";

    unset($_SESSION["account-created"]);
}
session_write_close();

session_name("access-failed");
session_start();

if(isset($_SESSION["access-failed"]) && $_SESSION["access-failed"] === true){
    echo "<script>alert('Datos incorrectos')</script>";

    unset($_SESSION["access-failed"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/styles/user/login-register.css">
    <script defer src="assets/scripts/login-register.js"></script>
    <script defer src="https://kit.fontawesome.com/1b1a22b128.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="assets/images/task-logo-removebg-preview-icon.png" type="image/x-icon">
    <title>TaskManager</title>
</head>

<body>
    <form action="../controller/user/login-controller.php" method="post" class="bg-white p-4 login-form col-md-9 col-lg-7 d-flex flex-column">
        <div class="mb-3 content d-flex flex-row position-relative">
            <span class="span-back col-2 position-absolute"><a class="text-dark" href="../../public_view/index.php"><i class="fa-solid fa-arrow-left"><span class="back-text">Volver</span></i></a></span>
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
            <input class="btn btn-dark container-fluid" type="submit" value="Iniciar Sesión" name="login_form_user">
        </div>
        <div class="mb-3 container-fluid d-flex justify-content-center">
            <span class="span-account">¿No tienes cuenta? <a href="register-user.php">Registrate aquí</a></span>
        </div>
    </form>
</body>

</html>