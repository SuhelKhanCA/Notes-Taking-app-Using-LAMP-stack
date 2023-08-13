<?php

    $showAlert = false;
    $showError = "false";
    $register=false;
    $length=true;
if ($_SERVER['REQUEST_METHOD']=='POST'){
  include "./dbconnect.php";
  
    $f_name = $_POST["firstname"];
    $l_name = $_POST["lastname"];
    $username= $_POST["username"];
    if(strlen($username)>10){
        $showAlert=true;
        $length=false;
        $showError="Username must be less than 11 characters";
    }
   
    $email = $_POST["email"];
   
    $password = $_POST["password"];
    $cpassword = $_POST["psw-repeat"];
    $city= $_POST["city"];
    $phoneno=$_POST["phoneno"];
     $len=strlen($phoneno);
     $phoneno=(int)$phoneno;

   
    $existSql="SELECT * FROM `normaluser` WHERE username= '$username'";
    $result=mysqli_query($connection, $existSql);
    $numExistRows= mysqli_num_rows($result);
    if ($numExistRows>0){
        $showError = "Username already exists";
        $showAlert=true;
    }
    else{
        if($length){
      
if(gettype($phoneno)=='integer' &&  $len==10){
    $length=false;
  
    if(($password==$cpassword)){
        $hash=password_hash($password, PASSWORD_DEFAULT);
        
        
        
        $sql="INSERT INTO `normaluser` (`username`, `firstname`, `lastname`, `email`, `password`, `phoneno`, `city`, `deleted`) VALUES ('$username', '$f_name', '$l_name', '$email', '$hash', '$phoneno', '$city','0');";
        
        
      
        $result=mysqli_query($connection, $sql);
        $register=true;
        
        
        
    } 


    
else{
      $showAlert=true;
        $showError = "Passwords do not match";
    }
}

    if($length ){
        $showAlert=true;
        $showError='Please Enter a valid Phone Number';
    }
        }


}
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resgister</title>
  <link rel="stylesheet" href="note_style.css">
  
  <style>
    body {
      font-family: Calibri, Helvetica, sans-serif;
      background-color:white;
    }

    .container {
      padding: 50px;
      background-color:cornsilk;
    }

    input[type=text],
    input[type=password],
    textarea {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
     
      background: #f1f1f1;
    }
input {
    border:2px.solid black;
    border-radius:20px;
    
}
    input[type=text]:focus,
    input[type=password]:focus {
      background-color: rgb(212, 255, 194);
      outline: none;
    }

    div {
      padding: 10px 0;
    }

    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }
.button{
    width:100%;
    border-radius:20px;
    
}


    .button:active {
      background-color:lightgreen;
      color:black;
        
    }
  
  </style>
</head>

<body>
  <?php
   include 'nav.php';
   ?>
<?php

     if ($showAlert){
        
            echo "<p style='height: 50px; display:flex;
            align-items:center; justify-content:center; background-color:rgb(222, 175, 175); margin-top:10px;color: #cc0033;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 13px;
            font-weight: bold;
            line-height: 20px;
            text-shadow: 1px 1px rgba(250,250,250,.3); '> $showError</p>";
            
    }
    if($register){
      echo "<p style='height: 50px; display:flex;
      align-items:center; justify-content:center; background-color:rgb(205, 242, 199); margin-top:10px;color: rgb(37, 163, 16);
      font-family: Helvetica, Arial, sans-serif;
      font-size: 13px;
      font-weight: bold;
      line-height: 20px;
   
      text-shadow: 1px 1px rgba(250,250,250,.3); border-radius:20px;'> Successfully Registered</p>";
      header("Refresh:1; url=./login.php");
    }
    ?>


    
  <form action="" method="Post">
    <div class="container">
      <center>
        <h1> Users Registeration Form</h1>
      </center>
      <hr>
      <label for='firstname'> Firstname </label>
      <input type="text" name="firstname" placeholder="Firstname" size="15" required id='firstname'>

      <label for='lastname'> Lastname: </label>
      <input type="text" name="lastname" placeholder="Lastname" size="20" required id='lastname'>

      <label for="username"> Username </label>
      <input type="text" name="username" id="username" placeholder='username' size='10' required>



      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required id='email'>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required id="password">

      <label for="psw-repeat"><b>Re-type Password</b></label>
      <input type="password" placeholder="Retype Password" name="psw-repeat" required id='psw-repeat'>

      <label for="city"><b>City Name</b></label>
      <input type="text" placeholder="City name" name="city" required id='city' size='10'>

      <label for="phoneno"><b>Phone Number</b></label>
      <input type="text" placeholder="Phone Number" name="phoneno" required id='phoneno' size='10'>


      <button type="submit" class="button">Register</button>
    </div>
  </form>

</body>

</html>