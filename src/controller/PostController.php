<?php

namespace App\src\controller;

use App\src\repository\AjoutPostRepo;
use App\src\repository\PostRepository;

class PostController{
    private $postRepo;

    public function __construct()
    {
        if(isset($this->postRepo)){
            $this->postRepo = new PostRepository;
        }
    }

    public function list()
    {
        $posts = $this->postRepo->getPosts();
        ob_start();
        require('templates/home.php');
        $output = ob_get_clean();
        echo($output);
    }

    public function create($idClient, $content, $title)
    {
        $this->postRepo->insertPost($idClient, $content, $title);
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