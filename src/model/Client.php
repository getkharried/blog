<?php
namespace App\src\model;

require_once('vendor\autoload.php');

use App\src\config\Database;

class Client
{
    private $id;
    private $firstName;
    private $lastName;
    private $pass;
    private $isAdmin;
    private $avatarPath;
    private $lastConnection;
    private $mail;

    public function getFirstName() : string
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
}
?>