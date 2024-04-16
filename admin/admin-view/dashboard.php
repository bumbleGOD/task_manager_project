<?php

session_start();

if (!isset($_SESSION['taskManager-admin'])) {
    header("Location: /task_manager_project/admin/admin-view/login-admin.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../app/view/assets/styles/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../app/view/assets/styles/admin/index.css">
    <script defer src="../../app/view/assets/scripts/jQuery/jquery-3.7.1.min.js"></script>
    <script defer src="../../app/view/assets/scripts/admin/index.js"></script>
    <script defer src="https://kit.fontawesome.com/1b1a22b128.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../../app/view/assets/images/task-logo-removebg-preview-icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title>TaskManager</title>
</head>

<body class=" d-flex row flex-column">
    <div class="barra-lateral">
        <div class="logo">
            <i id="menu-desplegable" class="fa-solid fa-bars"></i>
            <span><a href="" class="nav-link " onclick="mostrar('inicio')">TaskManager</a></span>
        </div>
        <div class="navegacion">
            <hr>
            <ul>
                <li>
                    <a href="#" onclick="mostrar('usuarios')" class="">
                        <i class=" fa-solid fa-user"></i>
                        <span>Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="#" onclick="mostrar('tareas')" class="">
                        <i class="fa-solid fa-list-check"></i>
                        <span>Tareas</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-chart-simple"></i>
                        <span>Estadísticas</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-id-card"></i>
                        <span>Perfil</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa-solid fa-gear"></i>
                        <span>Configuración</span>
                    </a>
                </li>
            </ul>
            <hr>
        </div>
        <div class="modo-oscuro">
            <div class="info">
                <i id="moon" class="fa-regular fa-moon"></i>
                <span>Dark mode</span>
            </div>
            <div class="switch">
                <div class="base">
                    <div class="circulo"></div>
                </div>
            </div>
        </div>
        <div class="sesion">
            <i class="fa-solid fa-user-tie"></i>
            <span>
                <div class="admin-text" title="<?= $_SESSION['taskManager-admin'] ?>"><?= substr($_SESSION['taskManager-admin'], 0, 6,) . "..." ?>/<a href="../model-admin/admin/logout.php" class="nav-link text-danger">Logout</a></div>
            </span>
        </div>
    </div>

    <div class="nav-horizontal" id="nav-horizontal">
        <h2>
            ¡Bienvenido de nuevo <?= $_SESSION['taskManager-admin'] ?>!
        </h2>
    </div>

    <section id="inicio">
        fino
    </section>

    <div id="usuarios">
        holaas
    </div>
    <div id="tareas">
        adioss
    </div>

    <div class="footer mt-auto">
        <h4>&copy; 2024-Todos los derechos reservados</h4>
    </div>
</body>

</html>