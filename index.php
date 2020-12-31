<! DOCTYPE html>
<html lang="en">
<head>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>hamidurshohag.com</title>
    <meta charset="utf-8">
</head>
<body style="background-color: #D2D2D2;">
     <section class="header">
          <div class="topbar text-center" style="height: 80px; width: 80%; background-color: #0B8076; margin: 0 auto;">
              <h1 style="color: #C3D3D4;font-style: italic;font-weight: 700; font-size: 50px; margin-top: 15px;">CRUD</h1>
          </div>
          <div class="manu" style="background-color: #323232;width: 80%; margin: 0 auto; height: 38px; overflow: hidden;">
              <ul style="list-style: none; margin-top: 7px;">
                  <li style="float: left;"><a href="index.php" style="  text-decoration: none;font-weight: bold; font-size: 18px; color: #EEF0E8;">HOME</a></li>
                  <li style="float: left;padding-left: 15px;"><a href="addrecod.php" style="  text-decoration: none; font-weight: bold; font-size: 18px; color: #EEF0E8;">ADD</a></li>
                  <li style="float: left;padding-left: 15px;"><a href="upadate.php" style="  text-decoration: none;font-weight: bold;font-size: 18px;color: #EEF0E8;;">UPDATE</a></li>
                  <li style="float: left;padding-left: 15px;"><a href="delete.php" style="  text-decoration: none;font-weight: bold;font-size: 18px;color: #EEF0E8;">DELETE</a></li>
              </ul>
          </div>
          <div class="alrecord" style="background-color:#FFFFFF; overflow: hidden;height: 480px;margin: 0 auto;width: 80%;">
              <h2 style="  font-weight: bold; margin-top: 15px;margin-left: 36px;">All Records</h2>
              <?php 
                 $con = mysqli_connect("localhost","root","","crud") or die("connection failed");
                 $sql = "SELECT *FROM student ";
                $result = mysqli_query($con ,$sql) or die("unsuccesfull");
                 if (mysqli_num_rows($result) > 0){

              ?>
              <table cellpadding ="7px" border="1" align="center" style="margin-top: 20px; margin-right: 15px;margin-left: 40px;width: 90%; margin-top: 100px; margin: 0 auto;text-align:center;">
                  <thead style=" background-color: #333333; color: #F5F7EF;">
                      <th style="font-size: 26px;">ID</th>
                      <th style="font-size: 26px;">Name</th>
                      <th style="font-size: 26px;">ADDRESS</th>
                      <th style="font-size: 26px;">CLASS</th>
                      <th style="font-size: 26px;">PHONE</th>
                      <th style="font-size: 26px;">ACTION</th>
                  </thead>
                  <tbody>
                      <?php 
                        while ($row = mysqli_fetch_assoc($result)){
 
                      ?>
                      <tr>
                          <td style=" font-size: 22px;"><?php echo $row["sid"]; ?></td>
                          <td style=" font-size: 22px;"><?php echo $row["sname"]; ?></td>
                          <td style=" font-size: 22px;"><?php echo $row["saddress"];?></td>
                          <td style=" font-size: 22px;"><?php echo $row["sclass"]; ?></td>
                          <td style=" font-size: 22px;"><?php echo $row["sphone"]; ?></td>
                          <td style="text-align: center;">
                          <button  style="background-color:#F3821C;border-radius: 1%;"> <a href="edit.php? id=<?php echo $row["sid"];?>" style="  text-decoration: none; font-weight: bold;">EDIT</a></button>
                          <button  style="background-color:#F3821C;border-radius: 1%;"> <a href="deleteinline.php? id=<?php echo $row["sid"];?>" style="  text-decoration: none; font-weight: bold;">DELETE</a></button>
                          </td>
                      </tr>
                      <?php } ?>
                  </tbody>
              </table>
             <?php  } 
             
              else {
                  echo "<h1> No recod Found</h1>";
              }
              mysqli_close($con);
             ?>
          </div>
     </section>
     <p class="text-center"> <small>This Application made by hamidurtutorial.com 31 DEC 2020 </small> </p>
       
        
     <script src="js/jquery-3.4.1.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/popper.min.js"></script>
</body>
</html>