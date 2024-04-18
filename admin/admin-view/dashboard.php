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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../app/view/assets/styles/admin/index.css">
    <script defer src="../../app/view/assets/scripts/jQuery/jquery-3.7.1.min.js"></script>
    <script defer src="../../app/view/assets/scripts/admin/index.js"></script>
    <script defer src="https://kit.fontawesome.com/1b1a22b128.js" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../../app/view/assets/images/task-logo-removebg-preview-icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title>TaskManager</title>
</head>

<body class="row" id="body">

    <div class="sidebar col-lg-4 col-xl-3 col-xxl-2 h-100 p-3">
        <h2 class="d-flex mb-4">
            <i id="boton-actualizar-tamaño" class="fa-solid fa-bars d-flex justify-content-center"></i>
            <span class="w-100 ps-2">TaskManager</span>
        </h2>
        <h2 class="d-flex mb-4">
            <a href="#dashboard" onclick="mostrar('dashboard')">
                <i class="fa-solid fa-gauge-high"></i>
                <span class="w-100 ps-2">Dashboard</span>
            </a>
        </h2>
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item mt-4">
                <a href="#usuarios" class="nav-link" onclick="mostrar('usuarios')">
                    <i class="fa-solid fa-user"></i>
                    <span>Usuarios</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#tareas" class="nav-link" onclick="mostrar('tareas')">
                    <i class="fa-solid fa-list-check"></i>
                    <span>Tareas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#estadisticas" class="nav-link" onclick="mostrar('estadisticas')">
                    <i class="fa-solid fa-chart-simple"></i>
                    <span>Estadísticas</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#perfil" class="nav-link" onclick="mostrar('perfil')">
                    <i class="fa-solid fa-id-badge"></i>
                    <span>Perfil</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#configuracion" class="nav-link" onclick="mostrar('configuracion')">
                    <i class="fa-solid fa-gear"></i>
                    <span>Configuración</span>
                </a>
            </li>
        </ul>
        <hr>
        <div class="modo-oscuro">

        </div>
    </div>

    <div class="main-content col-lg-8 col-xl-9 col-xxl-10 d-flex flex-column">
        <div class="nav-horizontal">
            <h2><i class="fa-solid fa-house-chimney"></i> Bienvenido de nuevo <?= $_SESSION['taskManager-admin'] ?></h2>
        </div>
        <div class="content-text-main col-lg-8 col-xl-9 col-xxl-10">
            <div class="content-text p-4" id="dashboard">
                hola Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero voluptatum officiis rerum nihil expedita itaque nostrum iusto placeat eius, similique quas eum adipisci, totam qui rem. Aspernatur consequatur sunt sequi vero enim id necessitatibus magnam? Quibusdam eum natus modi distinctio voluptate aliquam, repellendus doloribus deleniti aliquid nobis excepturi qui necessitatibus at dolorum quos optio fugit id amet ipsum illum deserunt! Amet exercitationem, eligendi magnam earum est odio numquam praesentium quia hic dolorem porro a! Provident magni aspernatur reprehenderit, minima quae dolorum perferendis! Quo porro iusto pariatur quibusdam earum voluptas laboriosam mollitia repudiandae reprehenderit atque sunt corrupti laudantium quis distinctio dolores odit ab, impedit, praesentium facere qui dolor error magnam minima eos! Eum cupiditate id voluptatibus. Vel at praesentium placeat necessitatibus unde aut repellat. Consequuntur, voluptates iste veniam blanditiis inventore, neque ipsa mollitia eveniet exercitationem animi, obcaecati sed quia quis ullam laboriosam. Hic amet fugit sed corrupti ipsa minima perspiciatis nobis quod nesciunt optio voluptatum distinctio, placeat provident illo vel nulla dolore quasi. Velit molestiae et nesciunt perspiciatis. Nemo eligendi placeat quod molestiae, ipsum facere autem ipsam repellendus inventore, unde dolorum. Reiciendis sunt harum similique maiores asperiores! Eum labore neque doloribus, provident perferendis dicta. Perferendis ab quod culpa amet, ipsum magni. Facilis alias numquam atque corporis!

            </div>
            <div class="content-text p-4" id="usuarios">
                asdsadLorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt repudiandae aspernatur hic, aut quia veritatis porro ipsa. Voluptas, voluptates! Eveniet quidem temporibus sint? Rerum asperiores possimus dolores voluptas debitis officia.
            </div>
            <div class="content-text p-4" id="tareas">
                fdgdLorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt repudiandae aspernatur hic, aut quia veritatis porro ipsa. Voluptas, voluptates! Eveniet quidem temporibus sint? Rerum asperiores possimus dolores voluptas debitis officia.
            </div>
            <div class="content-text p-4" id="estadisticas">
                eteLorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt repudiandae aspernatur hic, aut quia veritatis porro ipsa. Voluptas, voluptates! Eveniet quidem temporibus sint? Rerum asperiores possimus dolores voluptas debitis officia.
            </div>
            <div class="content-text p-4" id="perfil">
                qewqLorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt repudiandae aspernatur hic, aut quia veritatis porro ipsa. Voluptas, voluptates! Eveniet quidem temporibus sint? Rerum asperiores possimus dolores voluptas debitis officia.
            </div>
            <div class="content-text p-4" id="configuracion">
                ijkhLorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt repudiandae aspernatur hic, aut quia veritatis porro ipsa. Voluptas, voluptates! Eveniet quidem temporibus sint? Rerum asperiores possimus dolores voluptas debitis officia.
            </div>
        </div>
        <div class="footer">
            <h4>&copy; 2024-Derechos reservados</h4>
        </div>
    </div>

</body>

</html>