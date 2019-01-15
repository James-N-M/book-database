<?php

// Routes to figure out how to get working : )
$router->get('books', 'BookController@index');

// GET Routes
$router->get('', 'src/Controllers/index.php');
$router->get('insert-book', 'src/Controllers/insert-book.php');
$router->get('show-book', 'src/Controllers/show-book.php');
$router->get('edit-book', 'src/Controllers/edit-book.php');
$router->get('search-book', 'src/Controllers/search-book.php');

// POST Routes
$router->post('insert-book', 'src/Controllers/insert-book-process.php');
$router->post('update-book', 'src/Controllers/update-book.php');

// DELETE Routes
$router->get('delete-book', 'src/Controllers/delete-book-process.php');
