<?php

require_once __DIR__ . '/../../vendor/autoload.php';

// Load the .env file.
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Validate .env file to ensure presence of database credentials.
$dotenv->required('DB_USERNAME')->notEmpty();
$dotenv->required('DB_PASSWORD')->notEmpty();

return [
    'database' => [
        'provider' => 'mysql',
        'hostname' => '127.0.0.1',
        'database' => 'example_todo',
        'username' => $_ENV['DB_USERNAME'],
        'password' => $_ENV['DB_PASSWORD'],
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

        ]
    ]
];
