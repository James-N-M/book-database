<?php

class ImageMapper implements ImageMapperInterface
{
    private $db;
    private $table = "images";

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
    }

    public function insert(ImageInterface $image)
    {
        // TODO: Implement insert() method.
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