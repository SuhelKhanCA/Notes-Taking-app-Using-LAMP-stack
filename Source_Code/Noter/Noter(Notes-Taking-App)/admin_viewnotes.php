<?php
include 'dbconnect.php';
session_start();
if(!isset($_SESSION['username'])){
    header("location:./login.php");
}
$id=$_GET['id'];



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
    include 'nav.php';


    $sql="select * from `notes` where `noteid`='$id'";
    $result=mysqli_query($connection ,$sql);
    while($fetch =mysqli_fetch_assoc($result)){
       echo ' <div class="notes_info1"> 
            <div class="title"><b>Note Title:   '.$fetch['notename'].'</b> </div>
            <div class="Description"><h2>Note Description:</h2>   '.$fetch['Description'].' </div>
            

            <div class="date-time">
            <div class="date"> <b>DateCreated:  </b>'. date('d-m-Y', strtotime($fetch['time'])) .'</div>
            <div class="time"><b>Time Created:   <b>'. $fetch['time'].'</div>
        </div>';




    }



    ?>
   
</body>
</html>