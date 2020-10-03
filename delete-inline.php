<?php
  $stu_id = $_GET['id'];

  $conn = mysqli_connect("localhost", "root", "" ,"crud") or die("Connection Failed!");

  $sql = "DELETE FROM students WHERE sid = {$stu_id}";
  $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

  header("Location: http://localhost/core_php_crud/index.php");

  mysql_close($conn);

 ?>
