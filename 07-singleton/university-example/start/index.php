<!DOCTYPE html>
<html>
  <head>
    <title>Student Portal</title>
    <link rel="stylesheet" href="../assets/styles.css">
  </head>
  <body>
    <div class="wrapper">
      <header class="header">Student Portal</header>
      <article class="content">
      <?php include 'block-title.php'; ?>
        <?php include 'block-intro.php'; ?>
        <?php include 'block-alert.php'; ?>
        <?php include 'block-current-courses.php'; ?>
        <?php include 'block-completed-courses.php'; ?>
      </article>
      <aside class="sidebar">
        <?php include 'block-advisor.php'; ?>
        <?php include 'block-deadlines.php'; ?>
      </aside>
      <footer class="footer">
        <?php include 'block-debug.php'; ?>
        <?php include 'block-stats.php'; ?>
      </footer>
    </div>
  </body>
</html>
