<?php
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
    <link rel="stylesheet" href="./note_style.css">
    <title>Document</title>

</head>
<body>


<?php
include "nav.php";

echo '<div class="view-users">
<h2>Public Notes</h2>

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
            <div class="title"><b>Title: </b>
            '.$fetch['notename'].' </div>
            <div class="creator">Creator: '.$fetch['username'].'</div>
            <a href="./admin_viewnotes.php?id='.$fetch['noteid'].'"><button class="button"> View </button> </a>


        </div>
        <div class="date-time">
            <div class="date"><b>Date:</b>'.$fetch['date'].'</div>
            <div class="time"><b>Time:</b>'. $fetch['time'].'</div>

                        <div class="date"> <b>Last Date Modified:</b>'.$fetch["ldate"] .'</div>
                                <div class="date"> <b>Last Time Modified:</b>'.$fetch["ltime"] .'</div>
        </div>



    </div>   ';

}


if($no_notes)
    echo "<p style='color: red; text-align: center; margin-bottom: 5px;'>Currently No notes are public</p>";


?>
</body>
</html>