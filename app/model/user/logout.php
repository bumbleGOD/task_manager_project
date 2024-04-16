<?php

session_start();

if(!isset($_SESSION['taskManger-user'])){
    session_unset();
    session_destroy();

    header("Location: /task_manager_project\public_html\index.php");
    exit;
}

?>