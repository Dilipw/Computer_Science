<?php

session_start();

include_once 'head.html';

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
input{
    margin:2px;
}

    </style>
</head>

<body>
   
    <div class="container">
        <div class="container" style="background-color: rgb(233, 230, 230);">
            <div class="form bg">
                <h5 style="text-align:center">Fill up the information carefully</h5>
                <form action="action.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name" name="fname" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="middle name" name="mname" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name" name="lname" required>
                        </div>
                    </div>
                    <!-- <h5>Select Gender</h5> -->

                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="Radios1" value="Male">
                                <label class="form-check-label" for="gender">
                                    Male
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="Radios2" value="female">
                                <label class="form-check-label" for="gender">
                                    Female
                                </label>
                            </div>
                            <div class="form-check"> <input class="form-check-input" type="radio" name="gender"
                                    id="Radios3" value="other">
                                <label class="form-check-label" for="gender">
                                    Other
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="Address" placeholder="Enter Your Address">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" name="email" placeholder="Enter Email Id" required>
                        </div>
                    </div>
                   
                    <div class="row">

                        <div class="col">
                            <input type="text" class="form-control" name="phone"
                                placeholder="Enter 10 Digit phone number">
                        </div>
                        <div class="col">
                <input type="number" class="form-control" name="age"
                                placeholder="Enter Your Age">
                </div>
</div>
                       
                        <!-- <div class="col">
            </div> -->
            <div class="row">
            <div class="col">
                            <label for="dob">Input your DOB</label>
                            <input type="date" name="dob">
                        </div>
               
                <div class="col"></div>
            </div>
                    </div>

                    <!-- <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="Radios1" value="Male">
                    <label class="form-check-label" for="exampleRadios2">
                        BCS
                    </label>
                </div>
        
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="Radios2" value="female">
                    <label class="form-check-label" for="exampleRadios2">
                        BCA
                    </label>
                </div>
                <div class="form-check"> <input class="form-check-input" type="radio" name="exampleRadios" id="Radios3"
                        value="other">
                    <label class="form-check-label" for="exampleRadios2">
                        Bsc
                    </label>
                </div>
                <div class="form-check"> <input class="form-check-input" type="radio" name="exampleRadios" id="Radios3"
                    value="other">
                <label class="form-check-label" for="exampleRadios2">
                    Msc
                </label>
            </div>
            </div>
        </div> -->

                    <!-- <div class="row">
            <div class="col">
                <label for="photo">Uploade your Passport size photo</label>
<input type="file" name="photo" id="">
            </div>
          </div> --> <br>
                    <div class="row">
                        <div class="col">
                            <label for="cdate">Enter Your Check In Date :</label>
                            <input type="date" name="cdate" required>
                        </div>
                        <div class="col">
                            <label for="cdate">Enter Your Check Out Date :</label>
                            <input type="date" name="codate" required>
                        </div>
                    </div> <br>
                    <div class="row">
                        <b>We Have the following rooms for you</b>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="class" id="Radios1" value="4000">
                                <label class="form-check-label" for="gender">
                                    Class A--- > 4000
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="class" id="Radios2" value="3000">
                                <label class="form-check-label" for="gender">
                                    Class B--- > 3000
                                </label>
                            </div>
                            <div class="form-check"> <input class="form-check-input" type="radio" name="class"
                                    id="Radios3" value="2000">
                                <label class="form-check-label" for="gender">
                                    Class B--- > 3000
                                </label>
                            </div>
                            <div class="form-check"> <input class="form-check-input" type="radio" name="class"
                                    id="Radios3" value="1000">
                                <label class="form-check-label" for="gender">
                                    Class D--- > 3000
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="deu">For How Many Nights Did You Stay:</label>
                                <input type="number" name="duration">
                                <!-- <p>Your Room Rent is : Take the value using the php page</p> -->
                            </div>
                        </div>
                        <div class="row">
                            <b>Restaurant Menu</b>
                                <div class="form-check"> <input class="form-check-input" type="checkbox" name="Dessert"
                                    id="Radios3" value="0">
                                <label class="form-check-label" for="gender">
                                        Dessert --- > 100
                                </label>
                                <input type="number" placeholder="Enter Quantity" name="Desn" value="0">
                                </div>
                                <div class="form-check"> <input class="form-check-input" type="checkbox" name="Drinks"
                                        id="Radios3" value="0">
                                    <label class="form-check-label" for="gender">
                                        Drinks &#160;&#160;&#160;&#160;--- > 50
                                    </label>
                                <input type="number" placeholder="Enter Quantity" name="drn" value="0">
                                </div>
                                <div class="form-check"> <input class="form-check-input" type="checkbox" name="Breakfast"
                                        id="Radios3" value="0">
                                    <label class="form-check-label" for="gender">
                                        Breakfast--- > 90
                                    </label>
                                <input type="number" placeholder="Enter Quantity" name="brn" value="0">

                                </div>
                                <div class="form-check"> <input class="form-check-input" type="checkbox"name="lunch"
                                        id="Radios3" value="0">
                                    <label class="form-check-label" for="gender">
                                        Lunch  &#160;&#160;--- > 110
                                    </label>
                                <input type="number" placeholder="Enter Quantity" name="lnr" value="0">
                                </div>
                                <div class="form-check"> <input class="form-check-input" type="checkbox" name="dinner"
                                        id="Radios3" value="0">
                                    <label class="form-check-label" for="gender">
                                        Dinner  &#160;--- > 150
                                    </label>
                                    <input type="number" placeholder="Enter Quantity" name="dnnr" value="0">
                                </div>
                                <!-- <p>Your Total Food cost is is : Take the value using the php page</p> -->
                            </div>
                            <div class="row">

                            </div>
                        </div>
                        <input type="submit" name="submit" value="SUBMIT">

                    <input type="reset"> <br>
                    </div>
                    
                </form>
                <?php
                   if(!empty($_SESSION['error']))
                   {
                    ?>
                    <p><?php   foreach ($_SESSION['error'] as $error) {
            {
                print "<li>".$error."</li>";
              }
          }  ?></p>
          <?php

        }

        ?>
                 <?php
                 unset($_SESSION['error']);
                 ?>
                <!-- <div class="link" style="height: 4vh;width: 10vw;margin: auto;text-align: center;">
        <a href="login.html" style="text-decoration: none;margin: auto;">Already Registerd OR Login here</a>
    </div> -->

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<?php  include_once 'foot.html'; ?>
</body>

</html>

