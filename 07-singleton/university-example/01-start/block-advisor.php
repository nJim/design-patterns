<?php

/**
 * @file
 * Welcome block.
 */

$id = $_GET['StudentID'];
$query = "
  SELECT name, email, phone, office_hours as hours
  FROM students s
  JOIN advisors a ON s.advisor_id = a.id
  WHERE s.id = $id
";
$pdo = new PDO('mysql:host=database;dbname=lamp', 'lamp', 'lamp');
$data = $pdo->query($query)->fetch();

$person = [
  'name'  => $data['name'] ?? 'Undergraduate Advising Office',
  'email' => $data['email'] ?? 'advising@edu.edu',
  'phone' => $data['phone'] ?? '(978) 594-1938',
  'hours' => $data['hours'] ?? '9am - 1pm',
];
?>

<h2>Advisor</h2>
<div>Name: <?php echo $person['name']; ?></div>
<div>Email: <?php echo $person['email']; ?></div>
<div>Phone: <?php echo $person['phone']; ?></div>
<div>Office Hours: <?php echo $person['hours']; ?></div>
