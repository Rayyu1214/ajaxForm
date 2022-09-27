<?php
$host = 'localhost';
$db = 'test';
$user = 'root';
$password = 'Qaz159';

$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
$pdo = new PDO($dsn, $user, $password);
if ($pdo) {
// echo "Connected to the $db database successfully!";
}
} catch (PDOException $e) {
echo $e->getMessage();
}

// print_r($_POST['formData']) ;
// print_r($_POST);
?>