<?php

require_once (__DIR__ . "/../../../config/connection/connection.php");

class user extends connectionDB{
    public function registerUser($name, $lastName, $age_user, $username, $email, $number, $password){
        $connect = parent::getConnection();
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $connect->prepare("INSERT into users (name_user, lastName_user, age_user, username_user, email_user, number_user, password_user) values (?,?,?,?,?,?,?)");
        $stmt->bind_param("ssissss", $name, $lastName, $age_user, $username, $email, $number, $password_hash);

        if($stmt->execute()){
            $stmt->close();
            return true;
        }else{
            $stmt->close();
            return false;
        }
    }

    public function loginUser($email, $password){
        $connect = parent::getConnection();
        $password_select = "";

        $stmt = $connect->prepare("SELECT * from users where email_user = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            $password_select = $row["password_user"];
            $username = $row["username_user"];

            if(password_verify($password, $password_select)){
                session_start();
                $_SESSION['taskManager-user'] = $username;

                return true;
            }else{
                return false;
            }
        }
    }
}

?>