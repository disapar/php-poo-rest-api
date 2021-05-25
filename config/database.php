<?php


class Database
{

    private $host = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "restapi";
    protected $conn;

    public function __construct()
    {

        try {
            $this->conn  = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname, $this->dbuser, $this->dbpass);

        } catch (PDOException $ex) {
            echo 'Error conectando a la BBDD. ' . $ex->getMessage();
        }
        

    }

   
}

