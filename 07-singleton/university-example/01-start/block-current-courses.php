<?php

/**
 * @file
 * Current Courses block.
 */

$id = $_GET['StudentID'];
$today = "2022-09-20";
$query = "
  SELECT s.id,
  c.abbreviation abbr, c.title title, c.start_date start, c.end_date end, c.credits credits
  FROM students s
  JOIN enrollment e ON e.student_id = s.id
  JOIN course c ON e.course_id = c.id
  WHERE s.id = $id
    AND start_date < '$today'
    AND end_date > '$today';
";
$pdo = new PDO('mysql:host=database;dbname=lamp', 'lamp', 'lamp');
$data = $pdo->query($query)->fetchALL(PDO::FETCH_ASSOC);

?>

<h2>Current Courses</h2>

<?php if (!empty($data)) : ?>

  <table>
    <tr>
      <th scope="col">Course</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Credits</th>
      <th scope="col">Materials</th>
    </tr>

    <?php foreach ($data as $course) : ?>
      <tr>
        <td><?php echo $course['abbr'] . " - " . $course['title']; ?></td>
        <td><?php echo $course['start']; ?></td>
        <td><?php echo $course['end']; ?></td>
        <td><?php echo $course['credits']; ?></td>
        <td><a href="#">Course Links</a></td>
      </tr>
    <?php endforeach; ?>
  </table>

<?php else : ?>

  <p>You are not currently enrolled in any courses.</p>

<?php endif; ?>
