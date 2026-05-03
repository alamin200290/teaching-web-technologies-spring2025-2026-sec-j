<?php

    $username = $_POST['username'];
    sleep(3);
    if($username == ""){
        echo "username is null, please type first!";
    }else{
        echo "your username is: ".$username;
    }

?>