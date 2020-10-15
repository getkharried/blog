<?php

namespace App\src\controller;

use App\repository\PostRepository;

require_once 'vendor/autoload.php';


class Posts{

    public function list()
    {
        $postRepo = new PostRepository;
        $posts = $postRepo->getPosts(); 
        return $posts;
    }
}
?>