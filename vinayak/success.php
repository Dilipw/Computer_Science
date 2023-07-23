<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Computer Science Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>


    </style>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <div class="container">
        <div class="upper" >
            <div class="block1">
                <img src="img\download (3).jpg" alt="" height="80px">
            </div>
            <div class="block2">
                <!-- <h2>  श्री शिवाजी महाविद्यालय ,परभणी</h2> -->
                <!-- <h1>431401</h1> -->
                <h2 style="text-align: center;">Vinayak Hotel & Restaurant</h2>
                <p style="text-align: center;">Bus stand Road Near DSM college, Parbhani-431401</p>
            </div> <br>
         
        </div>


    </div>
     
    <div class="container" style="background-color:teal;height:100vh;width:30vw;color:white">
    <nav class="navbar navbar-expand-lg navbar-light" style="margin:auto">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img class="tables" src="img/download.png" alt="Hotel Logo" height="60px">
          </a>
         
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
   

   
    <?php
    
   
                 if(!empty($_SESSION['success']))
                 {
                ?>
                    <p> <?php echo $_SESSION['success'] ?></p>
                <?php
                 }
                ?>
                <?php
                if(!empty($_SESSION['name']))
                {
                  ?>
                  <p>Mr/Ms :<?php echo $_SESSION['name'];?></p>
                  <?php
                }?>
                <?php
                if(!empty($_SESSION['phone']))
                {
                  ?>
                  <p>Phone Number is :<?php echo $_SESSION['phone'];?></p>
                  <?php
                }
                ?>
                 <?php
                if(!empty($_SESSION['email']))
                {
                  ?>
                  <p>Email Id is :<?php echo $_SESSION['email'];?></p>
                  <?php
                }
                ?>
                <?php
                 if(!empty($_SESSION['fac']))
                 {
                ?>
                <p><?php echo $_SESSION['fac']?></p>
                <?php
                 }
                 ?>
                 <?php
                 if(!empty($_SESSION['cdate']))
                 {
                ?>
                <p><?php echo "Your Check in date is :".$_SESSION['cdate']?></p>
                <?php
                 }
                 ?>
                   <?php
                 if(!empty($_SESSION['codate']))
                 {
                ?>
                <p><?php echo "Your Check Out date is :".$_SESSION['codate']?></p>
                <?php
                 }
                 ?>
                   <?php
                 if(!empty($_SESSION['dur']))
                 {
                ?>
                <p><?php echo "You Set Total Duration is :".$_SESSION['dur']?></p>
                <?php
                 }
                 ?>
                 <?php
                 if(!empty($_SESSION['RoomRent']))
                 {
                    ?>
                    <p><?php echo "Your Total Room Rent is ".$_SESSION['RoomRent'];?></p>
                    <?php
                 }
                 ?>
                 <?php
  if(!empty($_SESSION['FoodP']))
  {
    ?>
    <p><?php echo "Your Total Food Purchase is ".$_SESSION['FoodP'];?></p>
  <?php
  }
  ?>
                <?php
  if(!empty($_SESSION['total']))
  { 
    ?>
    <p><?php echo "Your Total Bill is ".$_SESSION['total']."</br> Tip : Rs 1000 is a service Charge is Applied";?></p>
   <div>
 <button onclick="window.print()"><?php echo "Click Me For Print"; ?></button>
    <p>Dont Refresh the Page until Print</p>
  
   </div> 
   
  <?php
  }
  ?>
               <?php
                 unset($_SESSION['success']);
                 ?>
                  <?php
                 unset($_SESSION['fac']);
                 ?> <?php
                 unset($_SESSION['RoomRent']);
                 ?> <?php
                 unset($_SESSION['FoodP']);
                 ?>
                 <?php
                 unset($_SESSION['cdate']);
                 ?>
                 <?php
                 unset($_SESSION['codate']);
                 ?>
                 <?php
                 unset($_SESSION['total']);
                 ?>
                 <?php
                 unset($_SESSION['dur']);
                 ?>
                  <?php
                 unset($_SESSION['name']);
                 ?>
                  <?php
                 unset($_SESSION['email']);
                 ?>
                  <?php
                 unset($_SESSION['phone']);
                 ?>  
            
    </div>
     
               
</body>
</html>