<?php

/**
 * @file
 * Welcome block.
 */

$id = $_GET['StudentID'] ?? 1;
$query = "SELECT first_name, last_name FROM students WHERE id = $id";

$pdo = new PDO('mysql:host=database;dbname=lamp', 'lamp', 'lamp');
$data = $pdo->query($query)->fetch();

$greeting = "Student";
if (isset($data, $data['first_name'], $data['last_name'])) {
  $greeting = $data['first_name'] . " " . $data['last_name'];
}
?>

<h1>Welcome <?php echo $greeting; ?></h1>
