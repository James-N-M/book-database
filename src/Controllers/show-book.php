<?php

$bookId = $_GET['book'];

$bookMapper = new BookMapper($app['database']);

$book = new Book();

$book = $bookMapper->findById($bookId);

dd($book);

include 'views/show-book.view.php';