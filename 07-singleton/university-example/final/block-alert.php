<?php

/**
 * @file
 * Alert block.
 */

require_once 'Connect.php';

$id = $_GET['StudentID'] ?? 1;
$query = "SELECT first_name, last_name FROM students WHERE id = $id";

$query = "
  SELECT AVG(grade) 'average'
  FROM students s
  JOIN enrollment e ON e.student_id = s.id
  WHERE s.id = $id";

$data = Connect::getInstance()->getConnection()->query($query)->fetch();

?>

<?php if (!empty($data['average']) && $data['average'] < 75) : ?>
  <h2>Alerts</h2>
  <p class="error">Your cumulative average is below unviersity standards. Please contact your advisor to take steps to get into good academic standing.</p>
<?php endif; ?>
