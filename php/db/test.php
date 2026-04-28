<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

    if(!$con){
        echo "DB connection error";
    }

    $sql = "insert into users values(null, 'AI LABS', 'AGENTIC LABS', 'agent@aiub.edu')";
    if(mysqli_query($con, $sql)){
        echo "New row inserted! <br>";
    }else{
        echo "Not added! <br>";
    }

    $sql1 = "select * from users";
    $result = mysqli_query($con, $sql1);

    // for($i=0; $i<mysqli_num_rows($result); $i++){
    //     $row = mysqli_fetch_assoc($result);
    //     print_r($row);
    //     echo "<br>";
    // }

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }
  

?>