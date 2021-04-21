<?php

class Db
{
    public $dsn = "mysql:host=localhost;dbname=social";
    public $user = "root";
    public $pass = "";
    public $con;

    public function connect()
    {
        try {
            $this->con = new PDO($this->dsn, $this->user, $this->pass);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        return $this->con;
    }
}
?>