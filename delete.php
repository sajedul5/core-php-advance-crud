<?php include 'header.php';

if(isset($_POST['deletebtn'])){
  $conn = mysqli_connect("localhost", "root", "" ,"crud") or die("Connection Failed!");
  $stu_id = $_POST['sid'];
  $sql = "DELETE FROM students WHERE sid = {$stu_id}";
  $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

  header("Location: http://localhost/core_php_crud/index.php");

  mysql_close($conn);
}

?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
