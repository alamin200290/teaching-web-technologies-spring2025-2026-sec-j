<?php
    session_start();
    require_once('../model/userModel.php');
    if(isset($_REQUEST['submit'])){

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email  = $_REQUEST['email'];
        
        if($username == "" || $password == "" || $email == ""){
            echo "null username/password/email!";
        }else{
           
            $user = ['username'=>$username, 'password'=> $password, 'email'=> $email];
            $status = addUser($user);
            if($status){
                header('location: ../view/login.php');
            }else{
                header('location: ../view/signup.php');
            }

        }
    }else{
        echo "please submit form...";
    }

?>