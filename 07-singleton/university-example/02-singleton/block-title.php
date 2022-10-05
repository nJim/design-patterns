<?php

/**
 * @file
 * Welcome block.
 */

require_once 'Connect.php';

$id = $_GET['StudentID'] ?? 1;
$query = "SELECT first_name, last_name FROM students WHERE id = $id";
$data = Connect::getInstance()->getConnection()->query($query)->fetch();

$greeting = "Student";
if (isset($data, $data['first_name'], $data['last_name'])) {
  $greeting = $data['first_name'] . " " . $data['last_name'];
}
?>

<h1>Welcome <?php echo $greeting; ?></h1>
