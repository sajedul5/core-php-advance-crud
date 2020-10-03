<?php

 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['class'];
 $stu_phone = $_POST['sphone'];

 $conn = mysqli_connect("localhost", "root", "" ,"crud") or die("Connection Failed!");

 $sql = "INSERT INTO students(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

 header("Location: http://localhost/core_php_crud/index.php");

 mysql_close($conn);
 ?>
