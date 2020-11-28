<?php

namespace App\src\controller;

use App\src\model\Comment;
use App\src\repository\CommentRepository;

class CommentController
{
    private $commentRepo;

    public function __construct()
    {
        if (!isset($this->commentRepo)) {
            $this->commentRepo = new CommentRepository;
        }
    }

    public function list()
    {
        $posts = $this->commentRepo->getComments($_POST['idPost']);
        return $posts;
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $comment = new Comment;
            $comment->setIdClient($_POST['sessionId']);
            $comment->setIdPost($_POST['idPost']);
            $comment->setContent($_POST['content']);
            $this->commentRepo->insertComment($comment);
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->commentRepo->deleteCom($_POST['id']);
        }
    }
}
