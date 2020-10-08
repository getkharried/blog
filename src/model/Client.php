<?php
namespace App\src\model;

require_once('vendor\autoload.php');

use App\src\config\Database;

class Client
{
    public function getClient()
    {
        $database = new Database;
        $db = $database->getConnection();
        $result = $db->query('SELECT * FROM `client`');
        return $result->fetchAll();
    }
}
?>