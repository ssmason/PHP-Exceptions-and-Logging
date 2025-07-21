<?php

abstract class Database
{
    protected \mysqli $handler;
    protected $statement;
    protected $host, $dbName, $dbUser, $dbPassword;
    
    public function __construct($host, $dbName, $dbUser, $dbPassword)
    {
       $this->host = $host;
       $this->dbName = $dbName;
       $this->dbPassword = $dbPassword;
       $this->dbUser = $dbUser;
    }
    
    abstract public function connect();
    
    public function select($sql)
    {
        $this->statement = $this->handler->query($sql);
        return $this;
    }
    
    public function getConnection()
    {
        return $this->handler;
    }
    
    abstract public function get();
}