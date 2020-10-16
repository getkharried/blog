<?php
namespace App\src\repository;

use App\src\config\Database;

class PostRepository
{
    public function getPosts()
    {
        $database = new Database;
        $db = $database->getConnection();
        $result = $db->query('SELECT * FROM `post`');
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>