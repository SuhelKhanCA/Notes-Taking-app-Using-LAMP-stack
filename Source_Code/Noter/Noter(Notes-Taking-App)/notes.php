<?php

include"./dbconnect.php";
session_start();
if(!isset($_SESSION['username'])){
    header("location:./login.php");
}
$user=$_SESSION['username'];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./note_style.css">
    <title>Document</title>
    <script defer src="./create_note.js"></script>
    
    

        








    
       

</head>
<body>
    <?php
    include "nav.php";
    $done=false;
   
    ?>

    <div class='add_note' >

        <a href="#"><button class="create_note button">Create a new Note</button></a>

        <dialog class="note" >

            <form action="./add_note.php" method="post"
            method="dialog">
            <label for="note_title">Note Title</label>

           <input type="text" name="note_title" id="note_title" placeholder="Write The Title" >
           <label for="note_desc">Description</label>
           <textarea name="note_desc" id="note_desc" cols="20" rows="20"  placeholder="Add a description"></textarea>

          
           <a href="./add_note.php?id='.$user.'"> <button class="button">Add the note</button>
           </a>
           <a href="#"><button class="button close_note"> Close</button></a>
        
        </form>

           
                


        </dialog>
    
    </div>
  
    
    <div class="view-notes" style="text-align:center";>
       <h3 style="text-align:center">Your Notes </h3>

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
            <div class="title">Title:  '.$fetch['notename'].' </div>
            <div class="actions">
             <a href="./view_note.php?id='.$fetch['noteid'].'"><button class="button"> View </button> </a>
               <a href="./edit_note.php?id='.$fetch['noteid'].'"><button class="edit_note button""> Edit</button></a> 
                
               
               
               <a href="./remove.php?id='.$fetch['noteid'].' "> <button class="button"> Remove</button> </a>
               <a href="./makepublic.php?id='.$fetch['noteid'].' "><button class="button">Make Public</button></a>
               <a href="./makeprivate.php?id='.$fetch['noteid'].' "><button class="button">Make Private</button></a>
            </div>
            
            
        </div>
        <div class="date-time">
            <div class="date"> <b>Date Created :</b>'. $fetch['date'] .'</div>
            <div class="time"><b>Time Created:</b>'. $fetch['time'].'</div>
                        <div class="date"> <b>Last Date Modified:</b>'.$fetch["ldate"] .'</div>
                                <div class="date"> <b>Last Time Modified:</b>'.$fetch["ltime"] .'</div>
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
            text-shadow: 1px 1px rgba(250,250,250,.3); '> You Currently Have No Notes</p>";
}


if($done){
    header("location:./notes.php");
}
?>
    

</body>
</html>