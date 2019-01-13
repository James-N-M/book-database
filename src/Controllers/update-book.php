<?php

$bookMapper = new BookMapper($app['database']);

$book = new Book();

$book->setId($_POST['id']);
$book->setName($_POST['name']);
$book->setDescription($_POST['description']);
$book->setAuthor($_POST['author']);
$book->setGenre($_POST['genre']);
$book->setPageCount($_POST['page_count']);
$book->setChapterCount($_POST['chapter_count']);
$book->setCover($_POST['cover']);

$bookMapper->update($book);

echo "Successfully updated book";