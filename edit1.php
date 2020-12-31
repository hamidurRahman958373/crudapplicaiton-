<?php
     $stu_id = $_POST['sid'];
     $stu_name = $_POST['sname'];
     $stu_address = $_POST['saddress'];
     $stu_sclass = $_POST['sclass'];
     $stu_phone = $_POST['sphone'];
     
     $con = mysqli_connect("localhost","root","","crud") or die("connection failed");
     
     $sql = "UPDATE student SET sname = '{$stu_name}',saddress = '{$stu_address}', sclass = '{$stu_sclass}', sphone = '{$stu_phone}' WHERE sid = {$stu_id}";
     
     $result = mysqli_query($con ,$sql) or die("unsuccesfull");
     
      header("Location: http://localhost/demo-3/index.php");
      mysqli_close($con);
?>