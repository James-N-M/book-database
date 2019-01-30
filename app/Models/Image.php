<?php

class Image implements ImageInterface
{

    private $id;
    private $name;
    private $bookId;
    private $file_path;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setBookId($bookId)
    {
        $this->bookId = $bookId;
    }

    public function getBookId()
    {
        return $this->bookId;
    }

    public function setFilePath($filePath)
    {
        $this->file_path = $filePath;
    }

    public function getFilePath()
    {
        return $this->file_path;
    }
}