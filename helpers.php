<?php

// Print the data to the screen
// then kill the program
function dd($data)
{
    var_dump($data);
    die();
}

function view($name, $data = [])
{
    extract($data);

    return require "views/{$name}.view.php";
}