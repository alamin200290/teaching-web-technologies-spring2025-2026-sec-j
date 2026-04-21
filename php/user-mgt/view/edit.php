<?php
    session_start();
    $id = $_GET['id'];
    $users = $_SESSION['users'];
    $user= [];
    foreach($users as $u){
        if($u['id'] == $id){
            $user = $u;
            break;
        }
    }
?>


<html lang="en">
<head>
    <title>Edit User</title>
</head>
<body>
        <h1>Edit User</h1>
        <a href='user_list.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <form method="post" action="../controller/updateCheck.php" enctype="multipart/form-data">
            ID:         <input type="text" name="username" value="<?=$user['id']?>"/> <br>
            username:   <input type="text" name="password" value="<?=$user['username']?>"/> <br>
            Email:      <input type="email" name="email" value="<?=$user['email']?>"/> <br>
                        <input type="submit" name="submit" value="Update"/>
                        
        </form>
</body>
</html>