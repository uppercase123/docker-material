<?php
$host = '127.0.0.1';
$port = '3307';
$dbname = 'testdb';
$user = 'user';
$password = 'dbsecret';

$pdo = new \PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);

$id = 10;
$sth = $pdo->prepare('SELECT * FROM user WHERE id = :id');
$sth->execute(['id' => $id]);
$row = $sth->fetch();
var_dump($row);
