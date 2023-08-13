<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./note_style.css">
    <title>Document</title>
</head>
<style>
    .user-info{
        display:flex;
        justify-content:space-around;
    }


</style>
<body>
    <?php
    include "./dbconnect.php";
    session_start();
if(!isset($_SESSION['username'])){
    header("location:./login.php");
}
include "./nav.php";

?>
<div class="view-users">
<h2>Users</h2>

    </div>
    <?php
$sql="select * from normaluser where `deleted`='0'";



$result=mysqli_query($connection,$sql);
$no_users=true;


while($fetch =mysqli_fetch_assoc($result)){
 
   


    $no_users=false;
    echo '
    <div class="users">
      
        <div class="user-info"> 
            <div class="name">First Name:   '.$fetch['firstname'].' </div>
            <div class="name">Last Name:   '.$fetch['lastname'].'</div>
            </div>
                <div class="actions">
               <a href="./completeinfo.php?id='.$fetch['username'].' "> <button class="button"> View Info </button> </a>
               <a href="./temp_remove_user.php?id='.$fetch['username'].' "> <button class="button">Remove</button></a>
               
        </div>
    
    
    
    </div>';
}  
if($no_users)
   echo "<p style='height: 50px; display:flex;
        align-items:center; justify-content:center; background-color:rgb(222, 175, 175); margin-top:10px;color: #cc0033;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 13px;
        font-weight: bold;
        line-height: 20px;
        text-shadow: 1px 1px rgba(250,250,250,.3); '> Currently There Are No Users</p>";
?>





</body>
</html>