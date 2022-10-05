<?php

/**
 * @file
 * Alert block.
 */

$id = $_GET['StudentID'];
$query = "
  SELECT AVG(grade) 'average'
  FROM students s
  JOIN enrollment e ON e.student_id = s.id
  WHERE s.id = $id";

$pdo = new PDO('mysql:host=database;dbname=lamp', 'lamp', 'lamp');
$data = $pdo->query($query)->fetch();

?>

<?php if (!empty($data['average']) && $data['average'] < 75) : ?>
  <h2>Alerts</h2>
  <p>Your cumulative average is below unviersity standards. Please contact your advisor to take steps to get into good academic standing.</p>
<?php endif; ?>
