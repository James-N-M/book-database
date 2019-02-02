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

    require "app/Views/{$name}.view.php";
}

// Redirect to a url with a code
// Temporary redirect 302 submitting a form, 301 permanent
function redirect($url, $defaultCode = 302)
{
    header('Location: ' . $url, true, $defaultCode);
    exit();
}