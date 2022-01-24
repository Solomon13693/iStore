<?php
            
            require_once "./functions/conn.php";

            class operations extends connection {
                public $attr = [];
                public $rowCount;
                public $stmt;
                public $result;

                public function __set($name, $value){
                    $this->attr[$name] = $value;
                }
                
                public function insert($column, $values){
                    $table_name = $this->attr["table_name"];
                    $this->pdo->query("INSERT INTO $table_name ($column) VALUES ($values) ");
                }

                public function selectLogin($column, $value){
                    $table_name = $this->attr["table_name"];
                    $this->stmt = $this->pdo->query("SELECT * FROM $table_name WHERE email = '$column' AND password = '$value' ");
                }

                public function selectProductWIthCategories($column, $value){
                    $table_name = $this->attr["table_name"];
                    $this->stmt = $this->pdo->query("SELECT * FROM $table_name WHERE $column = '$value'  ");
                }

                public function selectAll(){
                    $table_name = $this->attr["table_name"];
                    $this->stmt = $this->pdo->query("SELECT * FROM $table_name");
                }

            }
        
            $result = new operations;

   ?>