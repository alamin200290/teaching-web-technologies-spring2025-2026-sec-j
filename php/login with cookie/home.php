<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>Welcome Home!<?php echo $_SESSION['username'];?></h1>
        <a href='logout.php'>Logout</a>
</body>
</html>