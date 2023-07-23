<?php
include_once 'db.php';

session_start();

$error=[];

  if(!empty($_POST['submit']))
  {
    echo "<pre>";
    print_r ($_POST);
    $fname=trim($_POST['fname']);
    $mname=trim($_POST['mname']);
    $lname=trim($_POST['lname']);
    $fullname=$fname." ".$mname." ".$lname;
    $phone=trim($_POST['phone']);
    $gender=trim($_POST['gender']);
    $age=trim($_POST['age']);
    $Address=trim($_POST['Address']);
    $email=trim($_POST['email']);
    $cdate=trim($_POST['cdate']);
    $codate=trim($_POST['codate']);
    $class=trim($_POST['class']);
    $durationRest=trim($_POST['duration'])."Days";
    $email=trim($_POST['email']);
    // $dessert=trim($_POST['Dessert']);
    $dessertQ=trim($_POST['Desn']);
    // $drink=trim($_POST['Drinks']);
    $drinkQ=trim($_POST['drn']);
    // $breakfast=trim($_POST['Breakfast']);
    $breakfastQ=trim($_POST['brn']);
    // $lunch=trim($_POST['lunch']);
    $lunchQ=trim($_POST['lnr']);
    // $dinner=trim($_POST['dinner']);
    $dinnerQ=trim($_POST['dnnr']);

     $dessert=0;
     $drink=0;
     $breakfast=0;
     $lunch=0;
     $dinner=0;
    if(isset($_POST['Dessert']))
    {
      $dessert=100*$dessertQ;
    }
if(isset($_POST['Drinks']))
{
  $drink=50*$drinkQ;
}
if(isset($_POST['Breakfast']))
{
  $breakfast=90*$breakfastQ;
}
if(isset($_POST['lunch']))
{
  $lunch=110*$lunchQ;
}
if(isset($_POST['dinner']))
{
  $dinner=150*$dinnerQ;
}
    // Calculate the room and room rent information 
$roomRent=$durationRest * $class;

    echo "Room Rent is ".$roomRent."<br>";
    
    if($class==4000)
    {
       $fac=" Your Room Class is A Room number is :".rand(1,10);
    }
    if($class==3000)
    {
      $fac=" Your Room Class is B Room number is :".rand(11,20);

    }
    if($class==2000)
    {
      $fac=" Your Room Class is C Room number is :".rand(21,30);
    }
    if($class==1000)
    {
      $fac=" Your Room Class is D Room number is :".rand(31,40);

    }
  
    //  Calculate the Food rent 
  //   echo "</br>";
  // echo " Food Purchase ";
  // echo "</br> Dessert Value is ".$dessert;
  // echo "</br> Breakfast value is ".$breakfast;
  // echo "</br> Lunch value is ".$lunch;
  // echo "</br> Drink value is ".$drink;
  // echo "</br> Dinner value is ".$dinner;

  // echo "</br>";

  $foodPur=$dessert+$breakfast+$lunch+$drink+$dinner;


    // if($dessert)

    echo "</br>";
    
    // validations 

    if(empty($phone))
    {
        $error[]="Phone can't be blank.";
    }
    if(!empty($phone) && !is_numeric($phone))
    {
        $error[]="Phone number should be numberic .";
    }
    if(!empty($phone) && (strlen($phone)<10 || strlen($phone)>10))
    {
     $error[]="Invalid phone no .";
    }
    if(!empty($email))
{
$conn=db_connect();
// $sanitizeEmail=mysqli_real_escape_string($conn,$email);
// $emailSql="SELECT id FROM `user` WHERE `email`='{$sanitizeEmail}'";
// $sqlResult=mysqli_query($conn,$emailSql);
// $emailRow=mysqli_num_rows($sqlResult);
// if($emailRow>0)
// {
//   $error[]="Email Already Exits";
// }
    if(!empty($error))
{
  $_SESSION['error']=$error;
  header('location:'.'form.php');
  exit();
}

   $Totalbill=$roomRent+$foodPur+1000;

   
     if(empty($error))
   {
    $sql="INSERT INTO `user`(name,age,gender,email,Address,phone,dob,cdate,codate,duration,totalbill) VALUES ('{$fullname}','{$age}','{$gender}','{$email}','{$Address}','{$phone}','{$dob}','{$cdate}','{$codate}','{$durationRest}','$Totalbill')";
$conn=db_connect();
   

    if(mysqli_query($conn,$sql))
{
  db_close($conn);
  $message="Booking is completed";
  $_SESSION['success']=$message;
  $_SESSION['fac']=$fac;
  $_SESSION['cdate']=$cdate;
  $_SESSION['codate']=$codate;
  $_SESSION['dur']=$durationRest;
  $_SESSION['RoomRent']=$roomRent;
  $_SESSION['FoodP']=$foodPur;
  $Totalbill=$roomRent+$foodPur+1000;
  $_SESSION['total']=$Totalbill;
  $_SESSION['name']=$fullname;
  $_SESSION['phone']=$phone;
  $_SESSION['email']=$email;
  header('location:'.'success.php');
  exit();
}
   }

   

}

  }
?>