<?php

class connectionDB{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $name_db = "task_manager";
    private $port = "3306";
    private $connect;

    public function __construct(){
        $this->connect = new mysqli($this->server, $this->username, $this->password, $this->name_db, $this->port);

        if($this->connect->connect_errno){
            die("¡Conexión fállida!".$this->connect->connect_error);
        }else{
            echo "<script>console.log('Conexión establecida')</script>";
        }
    }

    public function __destruct(){
        $this->connect->close();
        echo "<script>console.log('Conexión cerrada')</script>";
    }

    public function getConnection(){
        return $this->connect;
    }
}

?>