<?php

namespace App\src\controller;

use App\src\model\Post;
use App\src\repository\PostRepository;

class PostController
{
    private $postRepo;

    public function __construct()
    {
        if (!isset($this->postRepo)) {
            $this->postRepo = new PostRepository;
        }
    }

    public function list()
    {
        $posts = $this->postRepo->getPosts();
        require('templates/home.php');
        echo ($output);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $post = new Post;
            $post->setIdClient($_POST['idClient']);
            $post->setContent($_POST['content']);
            $post->setTitle($_POST['title']);
            $this->postRepo->insertPost($post);
        }

        require('templates/ajout.php');
    }

    public function read()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
