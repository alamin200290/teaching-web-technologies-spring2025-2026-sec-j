
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body> 
        <form method="post" action="../controller/loginCheck.php" enctype="multipart/form-data">
            Username:   <input type="text" name="username" value=""/> <br>
            Password:   <input type="password" name="password" value=""/> <br>
                        <input type="submit" name="submit" value="Submit"/>
                        <a href="signup.php">Sign up</a>
        </form>
</body>
</html>