<?php

  include 'header.php';
  $tasks = $db->query('SELECT * FROM tasks')->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>All Tasks <span class="text-muted">(<?= count($tasks); ?>)</span></h1>
<table class="table table-hover">
  <thead>
    <th>ID</th>
    <th>Title</th>
    <th>Priority</th>
    <th>Completed</th>
  </thead>
  <tbody>
    <?php foreach($tasks as $task) : ?>
    <tr>
      <td><a href="/edit.php?id=<?= $task['id']; ?>"><?= $task['id']; ?></a></td>
      <td><?= $task['title']; ?></td>
      <td><?= $task['priority']; ?></td>
      <td><?= ($task['completed'] == 1) ? '&check;' : ''; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>
