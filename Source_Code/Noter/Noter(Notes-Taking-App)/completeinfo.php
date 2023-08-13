<?php
include "dbconnect.php";
session_start();

if(!isset($_SESSION['username'])){
    header("location:./login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="note_style.css">
    <title>Document</title>
    
</head>
<body>
    <?php
    include "./nav.php";
    $id= $_GET['id'];

echo'<div class="info"><b>Username:'.
     $_GET['id'].'</b>

    
<a href="./temp_remove_user.php?id='.$_GET['id'].' "><button class="button">Remove</button></a>
    <a href="./admin_user_notes.php?id='.$_GET['id'].'"><button class="button" class>View notes</button></b></a>


   

      
    </div>';
    $sql="SELECT * FROM `normaluser` WHERE `username`='$id'";
$result=mysqli_query($connection,$sql);

while($fetch =mysqli_fetch_assoc($result)){
    
 echo' <div class="display_info">
 <div class="firstname">
 First Name:  
 '.$fetch['firstname'].'
 </div>
 <div class="lastname">
 Last name:  
 '.$fetch['lastname'].'
 </div>
 <div class="username">
 User Name: 
 '.$fetch['username'].'
 </div>
 <div class="email">
 Email: 
 '.$fetch['email'].'
 </div>
 <div class="PhoneNo">
  Phone Number: 
 '.$fetch['phoneno'].'
 </div>
 <div class="city">
 City: 
 '.$fetch['city'].'
 </div>
 </div>';
}


    
    ?>

  
</body>
</html>