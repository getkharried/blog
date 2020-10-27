<?php
require_once 'vendor/autoload.php';

use App\src\config\Routeur;

session_start();

$routeur = new Routeur();
$routeur->loadRoutes();
?>