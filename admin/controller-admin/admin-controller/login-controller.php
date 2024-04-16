<?php

require_once (__DIR__ . "/../../model-admin/admin/admin.php");

class loginController{
    public function loginController(){
        $admin = new admin();

        $email = trim($_POST['email_admin']);
        $password = trim($_POST['password_admin']);

        if($admin->loginAdmin($email, $password)){
            header("Location: /task_manager_project/admin/admin-view/dashboard.php");
            exit;
        }else{
            header("Location: /task_manager_project/admin/admin-view/401.html");
        }
    }
}

?>