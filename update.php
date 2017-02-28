<?php

include 'database.php';

$stmt = $db->prepare('UPDATE tasks SET title = :title, description = :description, priority = :priority, completed = :completed WHERE id = :id');
//$stmt->bindParam
$stmt->execute(array(
  ':id' => $_POST['id'],
  ':title' => $_POST['title'],
  ':description' => $_POST['description'],
  ':priority' => $_POST['priority'],
  ':completed' => array_key_exists('completed', $_POST) ? $_POST['completed'] : 0
));

header('Location: http://localhost:8080/edit.php?updated=true&id=' . $_POST['id']);
