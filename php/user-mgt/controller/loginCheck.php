<?php
    session_start();
    if(isset($_REQUEST['submit'])){

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
        if($username == "" || $password == ""){
            echo "null username/password!";
        }else{
            if($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){
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