<?php
include "dbconnect.php";

$state=false;
$id=$_GET['id'];
$sql="select * from `publicnotes` where `noteid`='$id' ";
$result=mysqli_query($connection,$sql);
$num=mysqli_num_rows($result);
if ($num == 0){
    $state=true;
    $sql="INSERT INTO `publicnotes`(`noteid`) VALUES ('$id')";
    $result=mysqli_query($connection,$sql);
    header("refresh:0; url=./notes.php");
}










?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

if(!$state){
    echo "<p style='height: 50px; display:flex;
        align-items:center; justify-content:center; background-color:rgb(222, 175, 175); margin-top:10px;color: #cc0033;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 13px;
        font-weight: bold;
        line-height: 20px;
        text-shadow: 1px 1px rgba(250,250,250,.3); border-radius:20px; '> Your Note Is Already Public</p>";


    header("refresh:1; url=./notes.php");

}
else{
  echo "<p style='height: 50px; display:flex;
        align-items:center; justify-content:center; background-color:rgb(205, 242, 199); margin-top:10px;color: rgb(37, 163, 16);
        font-family: Helvetica, Arial, sans-serif;
        font-size: 13px;
        font-weight: bold;
        line-height: 20px;
      
        text-shadow: 1px 1px rgba(250,250,250,.3); border-radius:20px; '>Your Note Is Public</p>";

    header("refresh:1; url=./notes.php");

    
}

?>
</body>
</html>