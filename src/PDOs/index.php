<?php

require_once __DIR__ . '/../../vendor/autoload.php';

require 'Task.php';

// Load the .env file.
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Validate .env file to ensure presence of database credentials.
$dotenv->required('DB_USERNAME')->notEmpty();
$dotenv->required('DB_PASSWORD')->notEmpty();

// Get connection details.
$provider = 'mysql';
$hostname = '127.0.0.1';
$database = 'example_todo';

// Get connection credentials.
$credentials = [
    'username' => $_ENV['DB_USERNAME'],
    'password' => $_ENV['DB_PASSWORD']
];

$dsn = $provider . ':host=' . $hostname . ';dbname=' . $database;

try {
    $pdo = new PDO($dsn, $credentials['username'], $credentials['password']);    
} catch(PDOException $e) {
    die($e->getMessage());
}

$stmt = $pdo->prepare('SELECT * FROM todos');
$stmt->execute();
$tasks = $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');

require 'index.view.php';