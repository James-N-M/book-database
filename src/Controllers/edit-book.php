<?php

$bookId = $_GET['book'];

$bookMapper = new BookMapper(App::get('database'));

$book = new Book();

$book = $bookMapper->findById($bookId);

include 'views/edit-book-form.view.php';