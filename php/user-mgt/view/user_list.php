<?php
    session_start();

    $users = [
        ['id'=> 1, 'username'=>'alamin', 'email'=> 'alamin@aiub.edu'],
        ['id'=> 2, 'username'=>'xyz', 'email'=> 'xyz@aiub.edu'],
        ['id'=> 3, 'username'=>'abc', 'email'=> 'abc@aiub.edu'],
        ['id'=> 4, 'username'=>'pqr', 'email'=> 'pqr@aiub.edu'],
        ['id'=> 5, 'username'=>'test', 'email'=> 'test@aiub.edu'],
    ];
    $_SESSION['users'] = $users;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>List for Users</title>
</head>
<body>
    
        <h1>List of Users</h1>
        <a href='home.php'>back</a> |
        <a href='../controller/logout.php'>Logout</a>
        <br>

        <table border=1>
        
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </tr>

            <?php  foreach($users as $user){ ?>
            <tr>
                <td><?php echo $user['id'];?></td>
                <td><?=$user['username']?></td>
                <td><?=$user['email']?></td>
                <td>
                    <a href="edit.php?id=<?=$user['id']?>"> EDIT </a> | 
                    <a href="delete.php?id=<?=$user['id']?>"> DELETE </a> | 
                    <a href="details.php?id=<?=$user['id']?>"> DETAILS </a> 
                </td>
            </tr>

            <?php }  ?>
        
        </table>

</body>
</html>