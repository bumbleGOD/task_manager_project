<?php
session_start();

require_once (__DIR__ . "/../model/user/user.php");

if(!isset($_SESSION['taskManager-user'])){
    header("Location: /task_manager_project/public_html/index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hola
    <a href="../model/user/logout.php">cerrar sesion</a>
</body>
</html>