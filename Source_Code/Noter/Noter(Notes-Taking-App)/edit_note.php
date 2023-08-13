<?php
include "dbconnect.php";
session_start();
if(!isset($_SESSION['username'])){
    header("location:./login.php");
}
$edited=false;
$_SESSION['id']=$_GET['id'];

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
    include "nav.php";

   
        

    
?>


<form action="./edit_note_backend.php?" method="post"
 class="editusernote">

<label for="note_title">Note Title</label>

<input type="text" name="note_title" id="note_title" placeholder="Write The Title" >
<label for="note_desc">Description</label>
<textarea name="note_desc" id="note_desc" cols="10" rows="10"  placeholder="Add a description"></textarea>


 <button class="button">Edit the Note</button>
 <button class="button">Close</button> 
 </form>






</body>
</html>