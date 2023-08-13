<?php
include "./dbconnect.php";
session_start();
if(!isset($_SESSION['username'])){
    header("location:./login.php");
}
include "./nav.php";
$user=$_GET['id'];
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
<div class="view-notes">
        <h3>User Notes </h3>
      

    </div>
<?php

$query="select * from `notes` where `username`='$user'";
$result=mysqli_query($connection, $query);
$no_notes=true;
while($fetch =mysqli_fetch_assoc($result)){
    $no_notes=false;
    


    echo '
    <div class="notes">
      
        <div class="notes_info"> 
            <div class="title">Tittle:  '.$fetch['notename'].' </div>
            
               <a href="./remove.php?id=1'.$fetch['noteid'].'&user='.$user.'"> <button class="button"> Remove</button> </a>
               
            
            
            
        </div>
        <div class="date-time">
            <div class="date">Date Created:  '.$fetch['time'] .'</div>
            <div class="time">Time Created:  '. $fetch['time'].'</div>
        </div>



    </div>   ';

}
if($no_notes){
   echo "<p style='height: 50px; display:flex;
        align-items:center; justify-content:center; background-color:rgb(222, 175, 175); margin-top:10px;color: #cc0033;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 13px;
        font-weight: bold;
        line-height: 20px;
        text-shadow: 1px 1px rgba(250,250,250,.3); '>Currently User Has No Notes</p>";;

}



?>
    

</body>
</html>
</body>
</html>
