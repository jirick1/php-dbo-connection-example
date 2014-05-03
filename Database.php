<?php

/**
 * Description of Database
 *
 * @author James Irick
 * 
 *  Database Connection Class uses the singleton design pattern. 
 *  We only need 1 connection object to exist when our application is running. 
 *  The singleton pattern is a design pattern that restricts the instantiation of a class to one object.
 */
 


class Database
{
    //TODO you should move this inside config file
    private $host = 'mysql:host=localhost;dbname=test';
    private $pwd  = '';
    private $user = '';
    private static $dbh = null;
    
    public function __construct()
    {
        try
        {
            Database::$dbh = new PDO($this->host, $this->user, $this->pwd);
            Database::$dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch (PDOException $e)
        {
        	//TODO create logger and log this to file
            echo "Connection Error: " . $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if (Database::$dbh === null) {
            new Database();
        }
        return Database::$dbh;
    }
}
