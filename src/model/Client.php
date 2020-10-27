<?php
namespace App\src\model;

require_once('vendor\autoload.php');

class Client
{
    private $id;
    private $username;
    private $firstName;
    private $lastName;
    private $pass;
    private $isAdmin;
    private $avatarPath;
    private $lastConnection;
    private $mail;

    public function getId(){
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getFirstName() : string
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
    }
    
    public function getAvatar()
    {
        return $this->avatarPath;
    }

    public function setAvatar($avatarPath)
    {
        $this->avatarPath = $avatarPath;
    }

    public function getLastConnection()
    {
        return $this->lastConnection;
    }

    public function setLastConnection($lastConnection)
    {
        $this->lastConnection = $lastConnection;
    }

    public function getMail()
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }
}
?>