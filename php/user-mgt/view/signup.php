
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
</head>
<body> 
        <form method="post" action="../controller/signupCheck.php" enctype="multipart/form-data">
            Username:   <input type="text" name="username" value=""/> <br>
            Password:   <input type="password" name="password" value=""/> <br>
            Email:      <input type="email" name="email" value=""/> <br>
                        <input type="submit" name="submit" value="Submit"/>
                        <a href="login.php">Sign in</a>
        </form>
</body>
</html>