<?php

// GET Routes
$router->get('', 'BookController@index');
$router->get('books', 'BookController@index');
$router->get('show-book', 'BookController@show');
$router->get('edit-book', 'BookController@edit');
$router->get('insert-book', 'BookController@create');
$router->get('delete-book', 'BookController@destroy');
$router->get('images', 'ImageController@index');
$router->get('insert-image', 'ImageController@create');

$router->get('search' , 'BookSearchController@index');

$router->get('search-book', 'BookSearchController@search');

// POST Routes
$router->post('insert-image', 'ImageController@store');
$router->post('insert-book', 'BookController@store');
$router->post('update-book', 'BookController@update');

