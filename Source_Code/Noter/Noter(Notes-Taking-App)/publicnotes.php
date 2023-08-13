<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./note_style.css">
    <title>Document</title>
    
</head>
<body>


<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:./login.php");
}
include "nav.php";

echo '<div class="view-notes">
        <h3>Public Notes </h3>
        
    </div>';
$no_notes=True;
include"dbconnect.php";
$sql="SELECT * from `notes` 
INNER JOIN `publicnotes` ON notes.noteid=publicnotes.noteid;";
$result=mysqli_query($connection,$sql);
while($fetch =mysqli_fetch_assoc($result)){
    $no_notes=false;
   
    
    
    
    
  
    
    echo '
    <div class="notes">
      
        <div class="notes_info"> 
            <div class="title"><b>Title:  '.$fetch['notename'].' </b></div>
            <div class="creator"><b>Creator: </b>'.$fetch['username'].'</div>
            <a href="./view_note.php?id='.$fetch['noteid'].'"><button class="button"> View </button> </a>
            
            
        </div>
        <div class="date-time">
            <div class="date"> <b>Date Created:  </b>'. $fetch['date'] .'</div>
            <div class="time"> <b>Time Created:  </b>'. $fetch['time'].'</div>
                        <div class="date"> <b>Last Date Modified:</b>'.$fetch["ldate"] .'</div>

                                <div class="date"> <b>Last Time Modified:</b>'.$fetch["ltime"] .'</div>
        </div>



    </div>   ';

}


if($no_notes)
   echo "<p style='height: 50px; display:flex;
        align-items:center; justify-content:center; background-color:rgb(222, 175, 175); margin-top:10px;color: #cc0033;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 13px;
        font-weight: bold;
        line-height: 20px;
        text-shadow: 1px 1px rgba(250,250,250,.3); '> Currently No Notes Are Public</p>";


?>
</body>
</html>