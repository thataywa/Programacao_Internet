<?php
require_once __DIR__ . '/../config/database.php';


class Tarefa{
    PRIVATE $conn;

    public function __construct(){
        $db = new Database();
        $this->conn = $db->conectar(); 
    }

}
?>