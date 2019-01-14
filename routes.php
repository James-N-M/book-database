<?php

// Routes to figure out how to get working
$router->get('books', 'BookController@index');

// GET Routes
$router->get('', 'src/Controllers/index.php');
$router->get('insert-book', 'src/Controllers/insert-book.php');
$router->get('show-book', 'src/Controllers/show-book.php');
$router->get('edit-book', 'src/Controllers/edit-book.php');

// POST routes
$router->post('insert-book', 'src/Controllers/insert-book-process.php');
$router->post('update-book', 'src/Controllers/update-book.php');

// DELETE GET Routes
$router->get('delete-book', 'src/Controllers/delete-book-process.php');
