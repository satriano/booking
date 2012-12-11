<?php

/**
 * Provides database functionality to the application.
 *
 * @author edwardsj
 */
class Database {
    public $dbType; //Specifies the database technology to be used.
    public $host;
    public $db; //Specifies the database to use.
    public $user;
    public $pass;
    
    public function __construct($dbType, $host, $db, $user, $pass)
    {
        $this->dbType = $dbType;
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;
        
        $this->connect();
    }
    
    function connect()
    {
        
    }
    
    public function query($query)
    {
        return $result;
    }
    
    function close()
    {
        
    }
}

?>
