<?php

namespace App\src\model;

require_once('vendor\autoload.php');

class Post
{
    private $id;
    private $idClient;
    private $content;
    private $title;
    private $link;
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

    public function getTitle()
    {
        return $this->title;
    }

    public function getLink()
    {
        return $this->link;
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

    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }
}
