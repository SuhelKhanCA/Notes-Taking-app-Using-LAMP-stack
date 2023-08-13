<?php
session_start();
if(!isset($_SESSION['username'])){
    header("location:./login.php");
}

include "dbconnect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="note_style.css">
</head>
<body>
    <?php
    include "nav.php";


?>
    
</body>
</html>
<?php
$sql="Select * from normaluser where `deleted`='1'";
$result=mysqli_query($connection,$sql);
$no_users=true;
while($fetch =mysqli_fetch_assoc($result)){
    $no_users=false;
    echo '
    <div class="users">
      
        <div class="removed_user"> 
            <div class="title">UserName:  '.$fetch['username'].' </div>
           
                
               <a href="./completeinfo.php?id='.$fetch['username'].' "> <button class="button"> View Complete info</button> </a>
               <a href="./repeal.php?id='.$fetch['username'].' "> <button class="button">Repeal</button></a>
               <a href="./completely_delete.php?id='.$fetch['username'].' "> <button class="button">Remove Completely</button></a>
       
            </div>
        </div>
    
    
    
    </div>';

}
if($no_users){
     echo "<p style='height: 50px; display:flex; align-items:center; justify-content:center; background-color:rgb(222, 175, 175); margin-top:10px;color: #cc0033; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-weight: bold; line-height: 20px; text-shadow: 1px 1px rgba(250,250,250,.3); '> No User</p>"; header("refresh:2; url=./view_users.php"); }

  ?>
