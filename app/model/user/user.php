<?php

require_once (__DIR__ . "/../../../config/connection/connection.php");

class user extends connectionDB{
    public function register_user($name, $lastName, $age, $username, $email, $number, $password){
        $connect = parent::getConnection();
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        
        $stmt = $connect->prepare("INSERT INTO users(name_user, lastName_user, age_user, username_user, email_user, number_user, password_user) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("ssissss", $name, $lastName, $age, $username, $email, $number, $password_hash);

        if($stmt->execute()){
            $stmt->close();
            return true;
        }else{
            $stmt->close();
            return false;
        }
    }
    public function login_user($email, $password){
        $connect = parent::getConnection();
        $password_select = "";
        $username = "";

        $stmt = $connect->prepare("SELECT * from users where email_user = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $res = $stmt->get_result();

        if(mysqli_num_rows($res) == 1){
            $row = mysqli_fetch_assoc($res);
            $password_select = $row["password_user"];
            $username = $row["username_user"];

            if(password_verify($password, $password_select)){
                $_SESSION["user"] = $username;
                $stmt->close();
                return true;
            }else{
                return false;
            }
        }else{
            $stmt->close();
            return false;
        }
    }
}

?>