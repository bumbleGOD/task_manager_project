<?php

class connectionDB{
    private $localhost = "localhost";
    private $root = "root";
    private $password = "";
    private $name = "task_manager";
    private $port = "3306";
    private $connect;

    public function __construct(){
        $this->connect = new mysqli($this->localhost, $this->root, $this->password, $this->name, $this->port);

        if($this->connect->connect_error){
            die("conexion fállida".$this->connect->connect_error);
        }
    }

    public function getConnection(){
        return $this->connect;
    }
}

?>