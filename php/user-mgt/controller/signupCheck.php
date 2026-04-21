<?php
    session_start();
    if(isset($_REQUEST['submit'])){

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email  = $_REQUEST['email'];
        
        if($username == "" || $password == "" || $email == ""){
            echo "null username/password/email!";
        }else{
           
            $user = ['username'=>$username, 'password'=> $password, 'email'=> $email];
            $_SESSION['user'] = $user;
            header('location: ../view/login.php');
        }
    }else{
        echo "please submit form...";
    }

?>