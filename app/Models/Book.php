<?php

class Book implements BookInterface, JsonSerializable
{
    private $id;
    private $name;
    private $description;
    private $author;
    private $genre;
    private $pageCount;
    private $chapterCount;
    private $cover;
    private $wishList;
    private $created_at;
    private $updated_at;

    public function __construct()
    {
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setPageCount($count)
    {
        $this->pageCount = $count;
    }

    public function getPageCount()
    {
        return $this->pageCount;
    }

    public function setChapterCount($count)
    {
        $this->chapterCount = $count;
    }

    public function getChapterCount()
    {
        return $this->chapterCount;
    }

    public function setCover($cover)
    {
        $this->cover = $cover;
    }

    public function getCover()
    {
        return $this->cover;
    }

    public function setWishList($wishList)
    {
        $this->wishList = $wishList;
    }

    public function getWishList()
    {
        return $this->wishList;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'author' => $this->author,
            'genre' => $this->genre,
        ];
    }
}