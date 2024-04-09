<?php

require_once(__DIR__ . "/../../model/user/user.php");

$user = new user();

$email = trim($_POST["email_user"]);
$password = trim($_POST["password_user"]);

if ($user->login_user($email, $password)) {
    session_name("user");
    session_start();
    header("Location: /task_manager_project/app/view/home.php");
    exit;
} else {
    session_name("access-failed");
    session_start();

    $_SESSION["access-failed"] = true;
    header("Location: /task_manager_project/app/view/login-user.php");
    exit;
}
