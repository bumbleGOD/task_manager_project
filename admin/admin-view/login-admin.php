<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../app/view/assets/images/task-logo-removebg-preview-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../../app/view/assets/styles/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../app/view/assets/styles/admin/login.css">
    <script defer src="../../app/view/assets/scripts/admin/login.js"></script>
    <script defer src="https://kit.fontawesome.com/1b1a22b128.js" crossorigin="anonymous"></script>
    <title>TaskManager</title>
</head>

<body>
    <form action="" method="post" class="bg-white col-sm-8 col-md-7 col-lg-6 col-xl-5 col-xxl-4 p-4 rounded-5" id="login-form-admin">
        <div class="mb-3 justify-content-center container-fluid d-flex">
            <h1 class="border-bottom border-dark p-1">Login</h1>
        </div>
        <hr>
        <div class="mb-3">
            <label for="email-admin" class="form-label">Email</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-user-tie"></i></span>
                <input type="email" class="form-control" id="email-admin" name="email_admin" aria-describedby="emailHelp" placeholder="Ingresa tu correo">
            </div>
        </div>
        <div class="mb-4">
            <label for="password-admin" class="form-label">Contraseña</label><br>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                <input type="password" class="form-control" id="password-admin" name="password_admin" placeholder="Ingresa tu contraseña">
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-dark container-fluid mb-3 mt-2" name="taskManager_login_form">Ingresar</button>
    </form>
</body>

</html>
<?php

require_once (__DIR__ . "/../controller-admin/admin-controller/login-controller.php");

if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)){
    $login = new loginController();

    if(isset($_POST['taskManager_login_form'])){
        $login->loginController();
    }
}

?>