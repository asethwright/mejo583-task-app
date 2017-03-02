<?php

  include 'database.php';

  $stmt = $db->prepare("INSERT INTO tasks
    (title, description, priority, completed)
    VALUES
    (:title, :description, :priority, :completed)
  ");

  $stmt->execute(array(
    ':title' => $_POST['title'],
    ':description' => $_POST['description'],
    ':priority' => $_POST['priority'],
    ':completed' => array_key_exists('completed', $_POST) ? $_POST['completed'] : 0
  ));

  $id = $db->lastInsertId();

  header('Location: http://localhost:8080/edit.php?id=' . $id . '&created=true');
?>
