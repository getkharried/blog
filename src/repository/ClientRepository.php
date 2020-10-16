<?php
namespace App\src\repository;

use App\src\config\Database;

class ClientRepository
{
    public function getClient()
    {
        $database = new Database;
        $db = $database->checkConnection();
        $result = $db->query('SELECT * FROM `client`');
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>