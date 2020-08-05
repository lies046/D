<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'D';

$conn = new Mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
  die('Database connect error: ' . $conn->connect_error);
}
