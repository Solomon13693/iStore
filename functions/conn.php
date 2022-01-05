<?php

class connection {

    public $pdo;

    public function __construct(){
        $host = "localhost";
        $username = "root";
        $db_name = "iStore";
        $password = "";

        // dsn
        $dsn = "mysql:host=$host; dbname=$db_name";

        $this->pdo = new PDO($dsn, $username, $password);

        // if($this->pdo){
        //     echo "Connection was successful";
        // }

    }
}

?>