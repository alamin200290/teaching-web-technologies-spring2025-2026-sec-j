<?php

    //$user = $_POST['user'];
    //$data = json_decode($user);
    
    //sleep(3);

    // if($data->password == ""){
    //     echo "username is null, please type first!";
    // }else{
    //     echo "your password is: ".$data->password;
    // }

    $user = ['username'=>'alamin', 'password'=>'123', 'email'=>'alamin@aiub.edu'];
    $data = json_encode($user);
    echo $data;
?>