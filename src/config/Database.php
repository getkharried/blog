<?php
namespace App\src\config;

class Database
{
    private const DB_HOST = 'mysql:host=localhost;dbname=avenoel';
    private const DB_USER = 'root';
    private const DB_PASSWORD = '';
    private $connection;

    public function getConnection()
    {
        $this->connection = new \PDO(self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
        return $this->connection;
    }

    public function checkConnection()
    {
        if(!isset($this->connection)){
            return $this->getConnection();
        }
        
        return $this->connection;
    }
}
?>