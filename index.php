<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">
    <label for="">Username:</label><br>
    <input type="text" name="user" placeholder="Enter your username" required> <br>
    
    <label for="">Password:</label><br>
    <input type="password" name="password" placeholder="Enter your password" required> <br>
    <br>
    <input type="submit" name="confirm" value="confirm">
</form>
    
</body>
</html>


<?php
    include("database.php");

    $username = $_POST["user"];
    $password = $_POST["password"];
    $sql = null;

    if(isset($username)){
        $sql = "INSERT INTO employee_account (user, password)
                VALUES ('$username', '$password')";
        mysqli_query($conn, $sql);
    }else{
        echo "Invalid to create";
    }

?>