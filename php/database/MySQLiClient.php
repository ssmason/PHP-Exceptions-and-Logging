<?php

require_once __DIR__ . '/Database.php'; // if not using autoload



class MySQLiClient extends Database
{
    public function __construct( $host, $dbName, $dbUser, $dbPassword )
    {
        parent::__construct($host, $dbName, $dbUser, $dbPassword );
    }
    
    public function connect()
    {
        $this->handler = new \mysqli( $this->host, $this->dbUser, $this->dbPassword, $this->dbName );
        return $this;
    }
    
    public function get()
    {
        return json_decode( json_encode( $this->statement->fetch_all( MYSQLI_ASSOC ) ) );
    }
}