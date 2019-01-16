<?php

// GET Routes
$router->get('', 'BookController@index');
$router->get('books', 'BookController@index');
$router->get('show-book', 'BookController@show');
$router->get('edit-book', 'BookController@edit');
$router->get('insert-book', 'BookController@create');
$router->get('delete-book', 'BookController@destroy');

$router->get('search-book', 'src/Controllers/search-book.php');

// POST Routes
$router->post('insert-book', 'BookController@store');
$router->post('update-book', 'BookController@update');

