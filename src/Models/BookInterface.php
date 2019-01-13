<?php

interface BookInterface
{
    public function setId($id);
    public function getId();

    public function setName($id);
    public function getName();

    public function setDescription($description);
    public function getDescription();

    public function setAuthor($author);
    public function getAuthor();

    public function setGenre($genre);
    public function getGenre();

    public function setPageCount($count);
    public function getPageCount();

    public function setChapterCount($count);
    public function getChapterCount();

    public function setCover($cover);
    public function getCover();

    public function setWishList($wishList);
    public function getWishList();

    public function setCreatedAt($created_at);
    public function getCreatedAt();

    public function setUpdatedAt($updated_at);
    public function getUpdatedAt();
}