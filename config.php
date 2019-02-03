<?php
return [
    'database' => [
        'name' => 'books',
        'username' => 'root',
        'password' => 'secret',
        'connection' => '127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
