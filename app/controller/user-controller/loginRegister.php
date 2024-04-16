<?php

require_once (__DIR__ . "/../../model/user/user.php");
class LoginRegisterController{
    public function registerController(){
        $user = new user();

        $name = trim($_POST['name_user']);
        $last_name = trim($_POST['lastName_user']);
        $age = trim($_POST['age_user']);
        $username = trim($_POST['username_user']);
        $email = trim($_POST['email_user']);
        $indicativo = trim($_POST['indicativo_user']);
        $number = trim($_POST['number_user']);
        $password = trim($_POST['password_user']);

        $number_complete = $indicativo . " " . $number;

        try{
            if($user->registerUser($name, $last_name, $age, $username, $email, $number_complete, $password)){
                echo "<script>alert('¡Te has registrado correctamente, ahora puedes iniciar sesión!')</script>";
                return true;
            }else{
                echo "<script>alert('!Error, no pudiste crear tu cuenta!')</script>";
                return false;
            }
        }catch(mysqli_sql_exception $e){
            echo "<script>alert('¡Error, no puedes crear un usuario que ya existe!')</script>";
            return true;
        }

    }
    public function loginController(){
        $user = new user();

        $email = trim($_POST['email_user']);
        $password = trim($_POST['password_user']);

        if($user->loginUser($email, $password)){
            header('Location: /task_manager_project/app/view/home.php');
            exit;
        }else{
            echo "<script>alert('¡Credenciales incorrectas!')</script>";
            return false;
        }
    }
}

?>