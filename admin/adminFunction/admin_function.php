<?php
            
            require_once "./../functions/conn.php";

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

                public function select($column, $value){
                    $table_name = $this->attr["table_name"];
                    $this->stmt = $this->pdo->query("SELECT * FROM $table_name WHERE email = '$column' AND password = '$value' ");
                }

                public function selectById($column, $value){
                    $table_name = $this->attr["table_name"];
                    $this->stmt = $this->pdo->query("SELECT * FROM $table_name WHERE $column = '$value' ");
                }


                public function selectProductAll(){
                    $table_name = $this->attr["table_name"];
                    $this->stmt = $this->pdo->query("SELECT * FROM $table_name ORDER BY category ");
                }

                public function delete($column, $value){
                    $table_name = $this->attr["table_name"];
                    $this->stmt = $this->pdo->query("DELETE FROM $table_name WHERE $column = $value");
                    $this->table_name = "products";
                }

                public function update($updateColumn, $updateValue, $column, $value){
                    $table_name = $this->attr["table_name"];
                    $this->stmt = $this->pdo->query("UPDATE $table_name SET $updateColumn = $updateValue WHERE $column = $value");
                    $this->table_name = "products";
                }

            }
        
            $result = new operations;

   ?>