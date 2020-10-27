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
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $post = new Post;
            $post->setLink($_POST['link']);
            $post->setIdClient($_POST['idClient']);
            $post->setContent($_POST['content']);
            $post->setTitle($_POST['title']);
            $this->postRepo->insertPost($post);
        }

        require('templates/ajout.php');
    }

    public function read()
    {
        if($_GET['id'] != null){
            $post = $this->postRepo->getPost($_GET['id']);
            require('templates/post.php');
        }else
            header('Location: index.php/?page=post&action=list');
    }

    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $post = new Post;
            $post->setId($_GET['id']);
            $post->setLink($_POST['link']);
            $post->setIdClient($_POST['idClient']);
            $post->setContent($_POST['content']);
            $post->setTitle($_POST['title']);
            $this->postRepo->updatePost($post);
        }

        if($_GET['id'] != null){
            $post = $this->postRepo->getPost($_GET['id']);
            require('templates/edit.php');
        }else
            header('Location: index.php?page=post&action=list');
    }

    public function delete()
    {
        if($_GET['id'] != null){
            $post = $this->postRepo->deletePost($_GET['id']);
            require('templates/edit.php');
        }else
            header('Location: index.php?page=post&action=list');
    }
}
