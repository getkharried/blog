<?php
namespace App\src\config;

class Database
{
    private const DB_HOST = 'mysql:host=localhost;dbname=avenoel';
    private const DB_USER = 'root';
    private const DB_PASSWORD = '';

    public function getConnection(){
        $connection = new \PDO(self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $connection;
    }
}
?>