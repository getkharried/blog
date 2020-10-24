<?php
require_once 'vendor/autoload.php';

use App\src\config\Routeur;

$routeur = new Routeur();
$routeur->loadRoutes();
?>