<?php

    if(isset($_REQUEST['submit'])){
        //print_r($_GET);

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
        if($username == "" || $password == ""){
            echo "null username/password!";
        }else{
            if($username == $password){
                echo "Valid user";
            }else{
                echo "Invlaid user!";
            }
        }
    }else{
        echo "please submit form...";
    }

?>