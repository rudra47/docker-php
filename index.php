<?php
$pdo = new PDO("mysql:host=db;dbname=db_test", 'admin', '123456');

$sql = 'INSERT INTO users(name) VALUES(:name)';
$statement = $pdo->prepare($sql);
$statement->execute([
    ':name' => bin2hex(random_bytes(5)),
]);

echo "A row has been successfully inserted";