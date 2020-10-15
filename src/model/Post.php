<?php
namespace App\src\model;

require_once('vendor\autoload.php');

class Post{

    private $id;
    private $idClient;
    private $content;
    private $title;
    private $createdAt;
    private $updatedAt;
    private $deletedAt;

    public function getId()
    {
        return $this->id;
    }

    public function getIdClient()
    {
        return $this->idClient;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function getDeletedAt()
    {
        return $this->deletedAt;
    }
}
?>