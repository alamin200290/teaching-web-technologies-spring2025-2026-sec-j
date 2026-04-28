<?php
    session_start();
    require_once('../model/userModel.php');
    if(isset($_REQUEST['submit'])){

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
        if($username == "" || $password == ""){
            echo "null username/password!";
        }else{
            $user = ['username'=>$username, 'password'=>$password];
            $status = login($user);

            if($status){
                $_SESSION['status'] = true;
                $_SESSION['username'] = $username;
                setcookie('status', 'true', time()+3000, '/');
                header('location: ../view/home.php');
            }else{
                echo "Invlaid user!";
            }
        }
    }else{
        echo "please submit form...";
    }

?>