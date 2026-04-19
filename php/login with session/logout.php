<?php
    session_start();
    unset($_SESSION['status']);
    session_destroy();
    header('location: login.php');

?>