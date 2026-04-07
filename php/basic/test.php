<?php

    $name = "alamin";
    $id = 12;
    $cgpa = 3.5;

    // $std = ['alamin', 12, 3.5];
    // $std[0];
    // $std = array('alamin', 12, 3.5);
    // $stds = [
    //     ['alamin', 12, 3.5],
    //     ['alamin', 2, 3.5],
    //     ['alamin', 3, 3.5]
    // ];
    // $stds[1][2];
    // $std['name'];
    // $stds = [
    //     's1'=>['name'=>'alamin', 'id'=>3, 'cgpa'=>3.5],
    //     's2'=>['name'=>'xyz', 'id'=>2, 'cgpa'=>3.3],
    //     's3'=>['name'=>'abc', 'id'=>1, 'cgpa'=>3.2]
    // ];
    // $std['s1']['cgpa'];

    for($a=0; $a<10; $a++){
        //echo "<h3>My name is: {$name}</h3>";
    }

    // if(){

    // }else{

    // }

    //echo "<h1>TEST"."-"."New TEST</h1>";
    //print('Another Test');
    //print_r($std);
    //var_dump($std);
    $std = ['name'=>'alamin', 'id'=>3, 'cgpa'=>3.5];
    foreach($std as $v){
        echo $v."<br>";
    }
?>