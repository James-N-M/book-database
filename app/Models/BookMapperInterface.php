<?php

interface BookMapperInterface
{
    public function findById($id);
    public function insert(BookInterface $book);
    public function update(BookInterface $book);
    public function delete($id);
}