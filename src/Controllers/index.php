<?php

$bookMapper = new BookMapper(App::get('database'));
$booksGroupedByGenres = $bookMapper->getBooksGroupedByGenres();

include 'views/partials/header.view.php';

include 'views/book-list.view.php';