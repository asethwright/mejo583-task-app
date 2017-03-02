<?php

  include 'header.php';
  $sort = array_key_exists('sort', $_GET) ? $_GET['sort'] : null;

  if ($sort !== null) {
    $tasks = $db->query('SELECT * FROM tasks ORDER BY priority ' . $sort)->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $tasks = $db->query('SELECT * FROM tasks')->fetchAll(PDO::FETCH_ASSOC);
  }

?>

<?php if (array_key_exists('deleted', $_GET)) : ?>
<div class="alert alert-danger">
  <p><strong>Task Deleted!</strong> The task was removed.</p>
</div>
<?php endif; ?>

<h1>All Tasks <span class="text-muted">(<?= count($tasks); ?>)</span></h1>
<table class="table table-hover">
  <thead>
    <th>ID</th>
    <th>Title</th>
    <th><a href="/index.php?sort=<?= ($sort === null || $sort === 'desc') ? 'asc' : 'desc'; ?>">Priority</a></th>
    <th>Completed</th>
  </thead>
  <tbody>
    <?php foreach($tasks as $task) : ?>
    <tr>
      <td><a href="/edit.php?id=<?= $task['id']; ?>"><?= $task['id']; ?></a></td>
      <td><a href="/edit.php?id=<?= $task['id']; ?>"><?= $task['title']; ?></a></td>
      <td><a href="/edit.php?id=<?= $task['id']; ?>"><?= $task['priority']; ?></a></td>
      <td><a href="/edit.php?id=<?= $task['id']; ?>"><?= ($task['completed'] == 1) ? '&check;' : ''; ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>
