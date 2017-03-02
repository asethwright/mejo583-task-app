<?php

  include 'header.php';

?>

<h1>Create Task</h1>

<form method="POST" action="/create.php">

  <div class="form-group">
    <label for="task_title">Title</label>
    <input class="form-control" type="text" name="title" id="task_title" value="" placeholder="Task Title" />
  </div>

  <div class="form-group">
    <label for="task_description">Description</label>
    <textarea class="form-control" name="description" id="task_description" placeholder="Task Description"></textarea>
  </div>

  <div class="form-group">
    <label for="task_priority">Priority</label>
    <select name="priority" id="task_priority" value="3" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3" selected>3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select>
  </div>

  <div class="checkbox">
    <label>
      <input type="checkbox" name="completed" value="1"> Completed
    </label>
  </div>

  <button class="btn btn-primary">Create New Task</button>
</form>

<?php include 'footer.php'; ?>
