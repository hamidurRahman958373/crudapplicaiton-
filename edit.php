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
              <h2 style="  font-weight: bold; margin-top: 15px;margin-left: 36px;">Edit Records </h2>
              <div class="form" style="width: 60%; margin: 0 auto; height: 300px; background-color: #E9E9E9;border-radius: 1%; margin-top: 15px;">
              <?php 
                 $con = mysqli_connect("localhost","root","","crud") or die("connection failed");
                 $stu_id = $_GET ["id"];
                 $sql = "SELECT *FROM student where sid = {$stu_id} ";
                $result = mysqli_query($con ,$sql) or die("unsuccesfull");
                 if (mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_assoc($result)){
              ?>
                <form action="edit1.php" method="post"  >
                    <label style="font-size: 22px;font-weight: bold;margin: 12px;" for="">Name</label> 
                    <input  type="hidden" name="sid" value="<?php echo $row['sid'] ; ?>">
                    <input style="padding: 5px; width: 320px;margin-left: 200px;" type="text" name="sname" value="<?php echo $row['sname'] ; ?>"><br>
                   
                    <label style="font-size: 22px;font-weight: bold;margin: 12px;" for="">Address</label>
                    <input style="padding: 5px; width: 320px;margin-left: 180px;" type="text" name="saddress" value="<?php echo $row['saddress'] ; ?>"><br>
                    
                    <label style="font-size: 22px;font-weight: bold;margin: 12px;" for="">Class</label>  
                    <input style="padding: 5px; width: 320px;margin-left: 210px;" type="number" name="sclass" value="<?php echo $row['sclass'] ; ?>"> <br>
                    
                    <label style="font-size: 22px;font-weight: bold;margin-left:px;margin: 12px;" for="">Phone</label> 
                    <input style="padding: 5px; width: 320px;margin-left: 198px;" type="text" name="sphone" value="<?php echo $row['sphone'] ; ?>"><br>
                    
                    <button style="margin-left: 300px;background-color: #60646A;border-radius: 1%; margin-top: 5px;color: #FFFFFF; font-weight: bold;padding:5px 15px ;" type="submit">SAVE</button>
               
                </form>
                <?php 
                }
                
            }
                ?>
              </div>
          </div>
     </section>
     <p class="text-center"> <small>This Application made by hamidurtutorial.com 31 DEC 2020 </small> </p>
       
       
        
     <script src="js/jquery-3.4.1.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/popper.min.js"></script>
</body>
</html>