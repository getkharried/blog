<?php

namespace App\src\config;

use App\src\controller\ClientController;
use App\src\controller\CommentController;
use App\src\controller\DefaultController;
use App\src\controller\PostController;

require_once 'vendor/autoload.php';

class Routeur
{
    public function loadRoutes()
    {
        $action = $_GET['action'];
        if (isset($_GET['page']) && $_GET['page']  === 'post') {
            $controller = new PostController;
        } elseif (isset($_GET['page']) && $_GET['page'] === 'client') {
            $controller = new ClientController;
        } elseif (isset($_GET['page']) && $_GET['page'] === 'comment') {
            $controller = new CommentController;
        } else {
            header("Location: ?page=post&action=list");
        }
        $controller->{$action}();
    }
}
