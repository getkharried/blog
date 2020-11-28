<?php

namespace App\src\repository;

use App\src\config\Database;
use App\src\model\Comment;

class CommentRepository
{
    public function getComments($idPost)
    {
        $database = new Database;
        $db = $database->checkConnection();
        $result = $db->prepare('SELECT * FROM `comment` WHERE id_post = :idPost');
        $result->bindValue(':idPost', $idPost, \PDO::PARAM_INT);
        return json_encode($result->fetchAll(\PDO::FETCH_ASSOC));
    }

    public function insertComment(Comment $comment): void
    {
        $database = new Database;
        $db = $database->checkConnection();
        $result = $db->prepare('INSERT INTO comment (id_client, content, id_post, created_at, updated_at, deleted_at)
        VALUES (:id_client, :content, :id_post, :created_at, :updated_at, :deleted_at)');
        $result->bindValue(':id_client', $comment->getIdClient(), \PDO::PARAM_INT);
        $result->bindValue(':content', $comment->getContent(), \PDO::PARAM_STR);
        $result->bindValue(':id_post', $comment->getIdPost(), \PDO::PARAM_STR);
        $result->bindValue(':created_at', date('Y-m-d H:i:s'), \PDO::PARAM_STR);
        $result->bindValue(':updated_at', NULL);
        $result->bindValue(':deleted_at', NULL);
        $result->execute();
    }

    public function deleteCom($id)
    {
        $database = new Database;
        $db = $database->checkConnection();
        $result = $db->prepare('DELETE FROM comment WHERE id=:id');
        $result->bindValue(':id', $id, \PDO::PARAM_INT);
        $result->execute();
    }
}