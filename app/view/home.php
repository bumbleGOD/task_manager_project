<?php
session_name("user");
session_start();

if(!isset($_SESSION["user"])){
    header("Location: /task_manager_project/public_view/index.php");
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
</body>
</html>