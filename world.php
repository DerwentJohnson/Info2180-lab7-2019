<?php
$host = "localhost";
$username = 'root';
$password = '';
$dbname = 'world';

$q = $_REQUEST['q'];
// $test = 1530;

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$stmt = $conn->prepare("SELECT * from countries where name = ?");
$stmt->execute([$q]);
$result = $stmt->fetch();

echo json_encode($result);


