<?php

function check_login($con)
{


    if(isset($_SESSION['username']));
    {
        $id = $_SESSION['username'];
        $query="select * from login where username='$user' and password='$pass'";

    }
}



?>