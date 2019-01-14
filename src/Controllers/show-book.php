<?php

$bookId = $_GET['book'];

$bookMapper = new BookMapper(App::get('database'));

$book = new Book();

$book = $bookMapper->findById($bookId);

include 'views/show-book.view.php';