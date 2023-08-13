<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin=true;
}
else{
  $loggedin=false;
}

?>

    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./navbar.css">
    </head>
  
    <body>
        <?php
        if(!$loggedin){
     echo' <nav> <div class="image"> <img src="./download (1).png" alt=""></div> <div class="menu"> <input type="checkbox" id="active">
     <label for="active" class="menu-btn"><span></span></label>
     <label for="active" class="close"></label>
     <div class="wrapper">
       <ul>
 <li><a href="./use.php">HowToUse?</a></li>
 <li><a href="./login.php">LOGIN</a></li>
 <li><a href="./register.php">REGISTER</a></li>
 ';


        }
        if($loggedin){
           
        
          echo '<nav> <div class="image"> <img src="./download (1).png" alt=""></div> <div class="menu"> <input type="checkbox" id="active">
          <label for="active" class="menu-btn"><span></span></label>
          <label for="active" class="close"></label>
          <div class="wrapper">
            <ul>
      <li><a href="./use.php">HowToUse?</a></li>';if($_SESSION["user_id"]==1){echo '<li><a  href="./view_users.php">Users</a></li>
              <li><a  href="./admin_publicnotes.php">PublicNotes</a></li>
              <li><a  href="./removeUser.php">RemovedUsers</a></li>';
            
          }
          else{
            echo'<li><a href="./notes.php">YourNotes</a></li>
            <li><a href="./notes.php">AddANote</a></li>
            <li><a  href="./publicnotes.php">PublicNotes</a>
            </li>';

          }
          echo'<li><a  href="./logout.php">LogOut</a>
          </li>';
        }
        

          echo '</ul> </div> </div> </nav>';

  ?>
  </body>
  </html>
  