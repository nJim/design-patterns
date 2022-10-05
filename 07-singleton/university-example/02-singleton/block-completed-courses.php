<?php

/**
 * @file
 * Current Courses block.
 */

require_once 'Connect.php';

$id = $_GET['StudentID'] ?? 1;
$today = "2022-09-20";
$query = "
  SELECT s.id,
  c.abbreviation abbr, c.title title, c.start_date start, c.end_date end, c.credits credits, e.grade grade
  FROM students s
  JOIN enrollment e ON e.student_id = s.id
  JOIN course c ON e.course_id = c.id
  WHERE s.id = $id
    AND end_date < '$today';
";
$data = Connect::getInstance()->getConnection()->query($query)->fetchALL(PDO::FETCH_ASSOC);

?>

<?php if (!empty($data)) : ?>

  <h2>Completed Courses</h2>

  <table>
    <tr>
      <th scope="col">Course</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Credits</th>
      <th scope="col">Grade</th>
    </tr>

    <?php foreach ($data as $course) : ?>
      <tr>
        <td><?php echo $course['abbr'] . ": " . $course['title']; ?></td>
        <td><?php echo $course['start']; ?></td>
        <td><?php echo $course['end']; ?></td>
        <td><?php echo $course['credits']; ?></td>
        <td><?php echo $course['grade']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

<?php endif; ?>
