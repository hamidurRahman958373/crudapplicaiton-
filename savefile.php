<?php 
   $stu_name = $_POST['sname'];
   $stu_address = $_POST['saddress'];
   $stu_sclass = $_POST['sclass'];
   $stu_phone = $_POST['sphone'];
   
   $con = mysqli_connect("localhost","root","","crud") or die("connection failed");
   $sql = "INSERT INTO student (sname,saddress,sclass,sphone) values('{$stu_name}','{$stu_address}','{$stu_sclass}','{$stu_phone}')";
   $result = mysqli_query($con ,$sql) or die("unsuccesfull");
   
    header("Location: http://localhost/demo-3/index.php");
    mysqli_close($con);

  
?>