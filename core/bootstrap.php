<?php
require 'helpers.php'; // add what ever helpers to the application
$app = [];

$app['config'] = require 'config.php';

$app['database'] = Connection::make($app['config']['database']);


