<?php

   session_start();
   $dbServername ="localhost";
   $dbUsername ="root";
   $dbPassword ="";
   $dbName ="task1";    //database name
   $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


   if (isset($_POST['submit'])) {


     $Title= $_POST['Title'];
     $FullName=$_POST['FullName'];
     $Position=$_POST['Position'];
     $Company=$_POST['Company'];
     $Email=$_POST['Email'];
     $StreetAddress=$_POST['StreetAddress'];
     $StreetAddressLine2=$_POST['StreetAddressLine2'];
     $choose=$_POST['ChooseYourCountry'];
     $City=$_POST['City'];
     $State=$_POST['state'];
     $ZipCode=$_POST['Zip'];
     $phoneNumber=$_POST['phone'];

   if(empty($Title)){
     echo '<script language="javascript">
    alert("un valid Title put valid one")
     </script>';

    }
    if(empty($FullName) || !preg_match("/^[a-zA-Z ]*$/",$FullName)){
      echo '<script language="javascript">
     alert("un valid FullName put valid one")
      </script>';
      }
    if(empty($Position)){
      echo '<script language="javascript">
     alert("un valid Position put valid one")
      </script>';
    }
    if(empty($Company) || !preg_match("/^[a-zA-Z0-9]*$/",$Company)){
      echo '<script language="javascript">
     alert("un valid Company put valid one")
      </script>';

    }
    if(empty( $Email)||!filter_var($Email,FILTER_VALIDATE_EMAIL))
    {
      echo '<script language="javascript">
     alert("un valid Email put valid one")
      </script>';
    }
    if(empty($StreetAddress))
    {
      echo '<script language="javascript">
     alert("un valid StreetAddress put valid one")
      </script>';

    }
    if(empty($StreetAddressLine2)||!preg_match("/^[a-zA-Z0-9]*$/",$StreetAddressLine2))
    {
      echo '<script language="javascript">
     alert("un valid StreetAddressLine2 put valid one")
      </script>';
    }
    if(empty($City)||!preg_match("/^[a-zA-Z0-9]*$/",$City))
    {
      echo '<script language="javascript">
     alert("un valid City put valid one")
      </script>';

    }
    if(empty($State)||!preg_match("/^[a-zA-Z0-9]*$/",$State))
    {
      echo '<script language="javascript">
     alert("un valid State put valid one")
      </script>';

    }
    if(empty($ZipCode) || !preg_match("/^[0-9]*$/",$ZipCode))
    {
      echo '<script language="javascript">
     alert("un valid ZipCode put valid one")
      </script>';

    }
    if(empty($phoneNumber) || !preg_match("/^[0-9]*$/",$phoneNumber))
    {
      echo '<script language="javascript">
     alert("un valid phoneNumber put valid one")
      </script>';

    }

    else {

      $sql="INSERT INTO task1 (Title,FullName,Position,Company,Email,StreetAddress,StreetAddressLine2,choose,City,State,ZipCode,phoneNumber)
      VALUES('$Title','$FullName','$Position','$Company','$Email','$StreetAddress','$StreetAddressLine2','$choose','$City','$State','$ZipCode','$phoneNumber')";

      mysqli_query($conn,$sql);
      exit();
    }

  }



?>








<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>task1</title>
        <link rel="stylesheet" href="task1.css" type="text/css"> <!--   (cssبhtml) ربط -->
        <meta name="viewport" content="width=device-width ,initial-scale=1.0,user-scalable=no">

    </head>
    <body>


        <h1 class="heading">COURSE REGISTRATION FORM</h1><!-- تقوم بعمل عنوان للصفحه-->

        <div class="col-3 col-s-3">
            <h1 class="head">Training Course</h1>
                <form action="task.php" method="post" >

                    <input type="text" placeholder="Title" name="Title">
                    <br><br>
                    <input type="text" placeholder="FullName" name="FullName">
                    <br><br>
                    <input type="text" placeholder="Position" name="Position">
                    <br><br>
                    <input type="text" placeholder="Company" name="Company">
                    <br><br>
                    <input type="email" placeholder="Email" name="Email">
                    <br><br>
                    <input type="text" placeholder="Street Address" name="StreetAddress">
                    <br><br>
                    <input type="text" placeholder="Street Address Line2" name="StreetAddressLine2">
                    <br><br>


                    <select class="choose" placeholder="choose your country" name="ChooseYourCountry">
                        <option>Egypt</option>
                         <option>Germany</option>
                         <option>America</option>
                         <option>Dubai</option>
                   </select>
                    <input class="ch" type="text" placeholder="City" name="City">
                    <br><br>
                    <input class="choose" type="text" placeholder="state/region" name="state">
                    <input class="ch" type="text" placeholder="Zip code" name="Zip">
                    <br><br>

                    <input type="text" placeholder="phone number" name="phone">
                    <br><br>
                    <button  type="submit" name="submit">submit
            </form>
        </div>
            <p class="last">@ 2018 Course Registration Form.All Rights Reserved</p>

    </body>
</html>
