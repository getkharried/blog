<?php

namespace App\src\controller;

use App\src\repository\PostRepository;

class PostController{

    public function list()
    {
        $postRepo = new PostRepository;
        $posts = $postRepo->getPosts();
        require('templates/postView.php');
    }

    public function create()
    {

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
?>