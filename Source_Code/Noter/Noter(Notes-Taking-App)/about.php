<?php

    //start session
    session_start();
    //If user has alredy loged in than redirect to notes.php page.
    if(isset($_SESSION['user_id'])){
        //Redirect to login.php
        echo"Successfull";
    }

?>