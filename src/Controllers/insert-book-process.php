<?php

$bookMapper = new BookMapper(App::get('database'));

$book = new Book();

$book->setName($_POST['name']);
$book->setDescription($_POST['description']);
$book->setAuthor($_POST['author']);
$book->setGenre($_POST['genre']);
$book->setPageCount($_POST['page_count']);
$book->setChapterCount($_POST['chapter_count']);
$book->setCover($_POST['cover']);
$book->setWishList(0);

$bookMapper->insert($book);

echo "Successfully added book";