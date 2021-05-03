<?php


namespace App\Core;

use PDO;


class Database
{
    // Variable migration BDD //
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;
    private $pdo;


    public function __construct($db_host, $db_name = "blog", $db_user = "root", $db_pass = "root")
    {
        $this->db_host = $db_host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
    }

    private function getPDO()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
        return $pdo;
    }


    public function query($statement)
    {
        $request = $this->getPDO()->query($statement);
        $data = $request->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

}














