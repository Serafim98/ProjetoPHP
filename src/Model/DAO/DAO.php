<?php

namespace App\Model\DAO;

use PDO;

class DAO
{
    private $conn;

    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost; dbname=projetofinalphp", "root", "");
    }

    public function getConn(){
        return $this->conn;
    }
}