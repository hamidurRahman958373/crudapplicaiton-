<?php 
  $stu_id = $_GET['id'];
  $con = mysqli_connect("localhost","root","","crud") or die("connection failed");
  $sql = "DELETE FROM student WHERE sid={$stu_id}";
  $result = mysqli_query($con ,$sql) or die("unsuccesfull");
  header("Location: http://localhost/demo-3/index.php");
  mysqli_close($con);
?>