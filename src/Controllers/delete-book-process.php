<?php
$bookMapper = new BookMapper($app['database']);

$bookMapper->delete($_GET['book']);

echo "Successfully deleted book";