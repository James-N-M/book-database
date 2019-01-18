<?php

interface ImageMapperInterface
{
    public function findById($id);
    public function insert(ImageInterface $image);
    public function update(ImageInterface $image);
    public function delete($id);
}