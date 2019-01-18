<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

Router::load('app/routes.php')
    ->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);

