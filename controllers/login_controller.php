<?php

    $hostname = "127.0.0.1";
    $hostuser = "root";
    $hostpass = "";
    $database = "univa";

    $connection = mysqli_connect($hostname, $hostuser, $hostpass, $database);

    if ($connection) {
        //echo "You're connected";
        $user_email = $_GET['user_email'];
        $user_password = $_GET['user_password'];
        $user_name = $_GET['user_name'];
        //var_dump($result);
        if (!empty($user_email) || !empty($user_password) || !empty($user_name))
        {
        $sqlquery = "INSERT INTO(name,email,password) users VALUES($user_name,$user_email,$user_password)";
        echo "Thanks for Registering";
        }
        else {
            echo "Sorry bro, you're missing either an email or password";
        }
    }
        
    else {
        echo "Sorry dude, you're NOT connected";
    }
?>