<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/view/assets/styles/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../app/view/assets/styles/user/index.css">
    <script defer src="../app/view/assets/scripts/jQuery/jquery-3.7.1.min.js"></script>
    <script defer src="../app/view/assets/scripts/user/index.js"></script>
    <script defer src="https://kit.fontawesome.com/1b1a22b128.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../app/view/assets/images/task-logo-removebg-preview-icon.png" type="image/x-icon">
    <title>TaskManager</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-sticky top-0 z-1">
        <div class="container-fluid">
            <span class="navbar-brand text-logo" href="#"><img class="img-logo" src="../app/view/assets/images/task-logo-removebg-preview-removebg-preview.png" alt="">Manager</span>
            <button class="navbar-toggler" id="navbar-show-controller" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-show">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" id="link-inicio" href="#Inicio">inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link-sobreNosotros" href="#Sobre">Sobre nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="link-contacto" href="#Contacto">Contacto</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../app/view/login-user.php">iniciar sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../app/view/register-user.php">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="section h-auto section-preview w-100">
            <img class="img-section" src="../app/view/assets/images/background-web.webp" alt="" srcset="">
            <div class="container p-3 bg-white text-section d-flex flex-column">
                <div class="content col-6">
                    <h1>Bienvenido a <span style="color: #029846;">Task</span>Manager</h1>
                    <p>¡Gestiona tus tareas de manera eficiente y mantén el control de tus proyectos!</p>
                </div>
                <div class="content col-6" style="border: 1px solid red;">
                    <img class="img-text" src="../app/view/assets/images/workona-tasks.png" alt="" srcset="">
                </div>
            </div>
    </section>
</body>

</html>