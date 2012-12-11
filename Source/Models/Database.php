<?php

/**
 * Provides database functionality to the application.
 *
 * @author edwardsj
 */
class Database {
    private $dbType; //Specifies the database technology to be used.
    private $host;
    private $db; //Specifies the database to use.
    private $user;
    private $pass;
    
    public function __construct($dbType, $host, $db, $user, $pass)
    {
        $this->dbType = $dbType;
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;
    }
    
    public function connect()
    {
    }
    
    public function query($query)
    {
        return $result;
    }
    
    public function close()
    {
    }
}

?>
