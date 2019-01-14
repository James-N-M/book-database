<?php
$bookMapper = new BookMapper(App::get('database'));

$bookMapper->delete($_GET['book']);

echo "Successfully deleted book";