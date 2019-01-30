<?php

class ImageMapper implements ImageMapperInterface
{
    private $db;
    private $table = "images";

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getImages()
    {
        $handle = $this->db->prepare("SELECT * FROM $this->table");
        $handle->execute();
        $result = $handle->fetchAll(PDO::FETCH_CLASS, 'Image');
        return $result;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function insert(ImageInterface $image)
    {
        $handle = $this->db->prepare("INSERT INTO $this->table 
          (name, book_id, file_path)
          values (:name, :book_id, :file_path)
          ");

        $handle->bindValue(':name', $image->getName(), PDO::PARAM_STR);
        $handle->bindValue(':file_path', $image->getFilePath(), PDO::PARAM_STR);
        $handle->bindValue(':book_id', $image->getBookId(), PDO::PARAM_INT);

        $handle->execute();
    }

    public function update(ImageInterface $image)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}