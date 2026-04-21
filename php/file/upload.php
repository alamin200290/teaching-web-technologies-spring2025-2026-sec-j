<?php

    //print_r($_FILES);

    $src = $_FILES['myfile']['tmp_name'];

    $ext = explode('.', $_FILES['myfile']['name']);
    $count = count($ext)-1;
    $newname = time().".".$ext[$count];
    $des = 'upload/'.$newname;
    if(move_uploaded_file($src, $des)){
        echo "Success";
    }else{
        echo "error";
    }

?>