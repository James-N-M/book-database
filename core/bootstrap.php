<?php
require 'helpers.php'; // add what ever helpers to the application

App::bind('config', require 'config.php');

App::bind('database',
    Connection::make(App::get('config')['database'])
);


