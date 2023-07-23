<?php
function db_connect(){
    $host="localhost";
    $db_user="root";
    $db_name="hotel";
    $db_pass="";
    $conn=mysqli_connect($host,$db_user,$db_pass,$db_name) or die("Connection error :".mysqli_connect_error());
    
    $sql1= "CREATE TABLE IF NOT EXISTS `user` ( `Id` INT(3) NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(150) NOT NULL ,  `age` INT(3) NOT NULL ,  `gender` VARCHAR(50) NOT NULL ,  `email` VARCHAR(150) NOT NULL ,  `Address` VARCHAR(200) NOT NULL ,  `phone` INT(10) NOT NULL ,  `dob` VARCHAR(30) NOT NULL ,  `cdate` VARCHAR(50) NOT NULL ,  `codate` VARCHAR(50) NOT NULL ,  `duration` VARCHAR(50) NOT NULL ,  `totalbill` VARCHAR(20) NOT NULL ,  `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP ,    UNIQUE  (`Id`)) ENGINE = InnoDB;";
 
    mysqli_query($conn,$sql1);

    return $conn;
  }


  function db_close($conn)
  {
      mysqli_close($conn);
  }


?>