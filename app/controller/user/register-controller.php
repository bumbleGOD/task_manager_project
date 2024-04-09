<?php

require_once(__DIR__ . "/../../model/user/user.php");

$user = new user();

$name = trim($_POST["name_user"]);
$lastName = trim($_POST["lastName_user"]);
$age = trim($_POST["age_user"]);
$username = trim($_POST["username_user"]);
$email = trim($_POST["email_user"]);
$indicativo = trim($_POST["indicativo_user"]);
$number = trim($_POST["number_user"]);
$password = trim($_POST["password_user"]);

$complete_number = $indicativo . " " . $number;

echo "a $name, $lastName, $age, $username, $email, $number, $password";

try {
    if ($user->register_user($name, $lastName, $age, $username, $email, $complete_number, $password)) {
        session_name("session-success");
        session_start();

        $_SESSION["account-created"] = true;
        header("Location: /task_manager_project/app/view/login-user.php");
        exit;
    } else {
        echo "error";
    }
} catch (mysqli_sql_exception $e) {
    session_name("session-error");
    session_start();

    $_SESSION["account-equals"] = true;
    header("Location: /task_manager_project/app/view/register-user.php");
    exit;
}
