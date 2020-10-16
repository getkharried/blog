<?php

use App\src\controller\ClientController;
use App\src\controller\DefaultController;
use App\src\controller\PostController;

require_once 'vendor/autoload.php';

$action = $_GET['action'];
if(isset($_GET['page']) && $_GET['page']  === 'post'){
    $controller = new PostController;
}elseif(isset($_GET['page']) && $_GET['page'] === 'client'){
    $controller = new ClientController;
}else{
    $controller = new DefaultController;
}
$controller->{$action}();
?>