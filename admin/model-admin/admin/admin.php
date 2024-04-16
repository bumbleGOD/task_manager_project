<?php

require_once (__DIR__ . "/../../../config/connection/connection.php");

class admin extends connectionDB{
    public function loginAdmin($email, $password){
        $connect = parent::getConnection();
        $password_select = "";

        $stmt = $connect->prepare("SELECT * from admin where email_admin = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();

        if(mysqli_num_rows($res) === 1){
            $row = mysqli_fetch_assoc($res);
            $password_select = $row['password_admin'];
            $username = $row['username_admin'];

            if(hash_equals($password_select, hash('sha256', $password))){
                session_start();
                $_SESSION['taskManager-admin'] = $username;

                return true;
            }else{
                return false;
            }
        }
    }
}

?>