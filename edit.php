<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from tasks WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $task = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<?php if (array_key_exists('updated', $_GET)) : ?>
<div class="alert alert-success">
  <p><strong>Update successful!</strong> Your task was updated.</p>
</div>
<?php endif; ?>

<?php if (array_key_exists('created', $_GET)) : ?>
<div class="alert alert-info">
  <p><strong>Task created!</strong> Your task was successfully created.</p>
</div>
<?php endif; ?>

<a href="/delete.php?id=<?= $task['id']; ?>" class="btn btn-danger btn-xs pull-right btn-delete">Delete Task</a>
<h1>Edit Task</h1>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="task_id" value="<?= $task['id']; ?>" />

  <div class="form-group">
    <label for="task_title">Title</label>
    <input class="form-control" type="text" name="title" id="task_title" value="<?= $task['title']; ?>" />
  </div>

  <div class="form-group">
    <label for="task_description">Description</label>
    <textarea class="form-control" name="description" id="task_description"><?= $task['description']; ?></textarea>
  </div>

  <div class="form-group">
    <label for="task_priority">Priority</label>
    <select name="priority" id="task_priority" value="<?= $task['priority']; ?>" class="form-control">
      <option value="1"<?= ($task['priority'] == 1) ? ' selected' : '' ?>>1</option>
      <option value="2"<?= ($task['priority'] == 2) ? ' selected' : '' ?>>2</option>
      <option value="3"<?= ($task['priority'] == 3) ? ' selected' : '' ?>>3</option>
      <option value="4"<?= ($task['priority'] == 4) ? ' selected' : '' ?>>4</option>
      <option value="5"<?= ($task['priority'] == 5) ? ' selected' : '' ?>>5</option>
      <option value="6"<?= ($task['priority'] == 6) ? ' selected' : '' ?>>6</option>
      <option value="7"<?= ($task['priority'] == 7) ? ' selected' : '' ?>>7</option>
      <option value="8"<?= ($task['priority'] == 8) ? ' selected' : '' ?>>8</option>
      <option value="9"<?= ($task['priority'] == 9) ? ' selected' : '' ?>>9</option>
    </select>
  </div>

  <div class="checkbox">
    <label>
      <input type="checkbox" name="completed" value="1"<?= ($task['completed'] == 1) ? ' checked' : ''; ?>> Completed
    </label>
  </div>

  <button class="btn btn-primary">Save Task</button>
</form>

<?php include 'footer.php'; ?>
