<?php

    $host = "127.0.0.1";
    $dbname = "webtech";
    $dbuser = "root";
    $dbpassword = "";

    function getConnection(){
        global $host;
        global $dbuser;

        $con = mysqli_connect($host, $dbuser, $GLOBALS['dbpassword'], $GLOBALS['dbname']);
        return $con;
    }

?>