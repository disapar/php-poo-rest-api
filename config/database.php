<?php


class Database
{

    private $host = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "restapi";
    protected $conn;

    public function connect()
    {

        try {
            $this->conn  = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->dbuser, $this->dbpass);

        } catch (PDOException $ex) {
            echo 'Error connect with BBDD. ' . $ex->getMessage();
        }
        

    }

   
}

