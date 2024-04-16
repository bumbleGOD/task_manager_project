<?php

session_start();

if(isset($_SESSION['taskManager-admin'])){
    session_unset();
    session_destroy();

    header("Location: /task_manager_project/admin/admin-view/login-admin.php");
    exit;
}

?>