<?php

require('connect.php');

function dd($value)
{
  echo "<pre>", print_r($value, true) . "</pre>";
  die();
}

//DBから値を取得する関数　$tableが仮引数で引数で渡されたテーブルの値を全て取得する。
function selectAll($table)
{
  global $conn;
  $sql = "SELECT * FROM $table";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
  return $records;
}

$users = selectAll('users');
dd($users);
