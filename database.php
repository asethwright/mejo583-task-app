<?php

  error_reporting(E_ALL);

  if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
  }

  $db = new PDO('mysql:host=localhost;dbname=app;charset=utf8mb4', 'root', 'root');
