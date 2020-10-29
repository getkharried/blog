<?php

namespace App\src\model;

require_once('vendor\autoload.php');

class Comment
{
    private $id;
    private $idClient;
    private $idPost;
    private $content;
    private $createdAt;
    private $updatedAt;
    private $deletedAt;

    public function getId()
    {
        return $this->id;
    }

    public function getIdClient()
    {
        return (int)$this->idClient;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getIdPost()
    {
        return $this->idPost;
    }

    public function setIdPost($idPost)
    {
        $this->idPost = $idPost;
        return $this;
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

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
        return $this;
    }
}
