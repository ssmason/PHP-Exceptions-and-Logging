<?php

use PDO;
use PDOException;


class PDOClient extends Database
{
    protected $dsn;
    
    public function __construct($driver, $host, $dbName, $dbUser, $dbPassword)
    {
        parent::__construct($host, $dbName, $dbUser, $dbPassword);
        $this->dsn = "{$driver}:host={$this->host};dbname={$this->dbName}";
    }
    
    public function connect()
    {
        try{
            $this->_handler = new PDO($this->dsn, $this->db_user, $this->db_password);
        }catch (PDOException $ex){
            throw $ex;
        }
        return $this;
    }
    public function get()
    {
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }
}