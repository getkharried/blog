<?php
namespace App\src\repository;

use App\src\config\Database;

class PostRepository
{
    public function getPosts()
    {
        $database = new Database;
        $db = $database->checkConnection();
        $result = $db->query('SELECT * FROM `post`');
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function insertPost($idClient, $content, $title)
    {
        $database = new Database;
        $db = $database->checkConnection();
        $result = $db->query('INSERT INTO post (id_client, content, title, created_at)
        VALUES (:id_client, :content, :title, :created_at');
        $result->bindParam('id_client', $idClient);
        $result->bindParam('content', $content);
        $result->bindParam('title', $title);
        $result->bindParam('created_at', date('Y-m-d H:i:s'));
        return $result->fetchAll(\PDO::FETCH_ASSOC);
    }
}
?>