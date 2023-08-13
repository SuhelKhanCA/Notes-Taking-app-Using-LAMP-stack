
<?php
 $login = false;
 $error=false;
 $showError="Invalid Username";
if($_SERVER['REQUEST_METHOD']=='POST'){
   include "./dbconnect.php";
   $username = $_POST["username"];
$password=$_POST['password'];

$sql= "SELECT * FROM normaluser where username='$username' and deleted='0'";
$result=mysqli_query($connection, $sql);
        $num=mysqli_num_rows($result);
        if ($num == 1){
            $result=mysqli_fetch_assoc($result);



                if (password_verify($password, $result['password'])){
                    $login = true;
                    session_start();
                    $_SESSION['loggedin']=true;
                    $_SESSION['username']=$username;
                     $_SESSION['user_id']=0;
                    $showError="";


                    header("refresh:1; url=./notes.php");
                }
                else{
                    $error=true;
                    $showError="Invalid Password";
                }


            }



    else{
        $sql= "SELECT * FROM admin where adminid='$username'";
        $result=mysqli_query($connection, $sql);
                $num=mysqli_num_rows($result);
                if ($num == 1){
                    $result=mysqli_fetch_assoc($result);



                        if (password_verify($password, $result['password'])){
                            $login = true;
                            session_start();
                            $_SESSION['loggedin']=true;
                            $_SESSION['username']=$username;
                            $_SESSION['user_id']=1;
                      
                            header("refresh:1; url=./view_users.php");
                        }
                        else{
                            $error=true;
                        $showError="Invalid Password";
                        }
                    }
                    else{
                        $error=true;
                    }

    }

}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
   <link rel="stylesheet" href="note_style.css">
<style>
Body {
  font-family: Calibri, Helvetica, sans-serif;
  background-color:white;
  
}

center h1{
    margin-top:5px;
    margin-bottom:5px;

}
 
 form {
        background-color:cornsilk;
        border-radius:20px;
        margin-left:10px;
        margin-right:10px;
        
       
    }
 input[type=text], input[type=password] {
        width: 100%;
        margin: 8px 0;
        padding: 12px 20px;
        display: inline-block;
        border: 2px solid black;
        border-radius:20px;
        box-sizing: border-box;
    }
 button:hover ,input[type=reset]:hover{
        opacity: 0.7;
    }
  .cancelbtn {
        width: auto;
        padding: 10px 18px;
        margin: 10px 5px;
    }


 .container {
   
   
     
     margin-top:50px;
     
        padding: 25px;
        background-color: cornsilk;
       width:100%;
        border-radius:20px;
      
      
        
       
        
       
        
        
    }
    .button{
        width:100%;
        margin-top:10px;
    }
    input:focus{
        background-color:rgb(141, 204, 158);
    }
    .button:active{
        background-color: rgb(141, 204, 158);
    }
    input[type='reset']:active{
        background-color:red;
    }
    }
    
</style>
</head>
<body>
    <?php
    include "nav.php";



    ?>


    <?php
    if ($login){
        echo "<p style='height: 50px; display:flex;
      align-items:center; justify-content:center; background-color:rgb(205, 242, 199); margin-top:10px;color: rgb(37, 163, 16);
      font-family: Helvetica, Arial, sans-serif;
      font-size: 13px;
      font-weight: bold;
      line-height: 20px;
      
      text-shadow: 1px 1px rgba(250,250,250,.3); border-radius:20px; '> Successfully Logged In</p>";;
        



    }
    if ($error){

             echo "<p style='height: 50px; display:flex;
            align-items:center; justify-content:center; background-color:rgb(222, 175, 175); margin-top:10px;color: #cc0033;
            font-family: Helvetica, Arial, sans-serif;
            font-size: 13px;
            font-weight: bold;
            line-height: 20px;
            text-shadow: 1px 1px rgba(250,250,250,.3); '> $showError</p>";
          
            
    }





    ?>
    <form action="" method="Post">
        <div class="container">
            <center> <h1> User Login </h1> </center>
            <label for='username'>Username : </label>
            <input type="text" placeholder="Username / Admin Id" name="username" required id='username'>
            <label for='password'>Password : </label>
            <input type="password" placeholder="Password" name="password" required id='password'>
            <button class="button" type="submit">Login</button>

           <input class="button" type="reset" value="Reset">

        </div>
    </form>
</body>
</html>