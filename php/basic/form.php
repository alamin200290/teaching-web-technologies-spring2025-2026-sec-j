<?php
    if(isset($_REQUEST['submit'])){

        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        
        if($username == "" || $password == ""){
            echo "null username/password!";
        }else{
            if($username == $password){
                echo "Valid user";
            }else{
                echo "Invlaid user!";
            }
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body> 
        <form method="post" action="" enctype="multipart/form-data">
            Username:   <input type="text" name="username" value="<?php if(isset($_POST['username'])){echo $username;} ?>"/> <br>
            Password:   <input type="password" name="password" value="<?php if(isset($_POST['password'])){echo $password;}?>"/> <br>
                        <input type="submit" name="submit" value="Submit"/>
        </form>
</body>
</html>