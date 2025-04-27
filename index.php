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
    <input type="text" name="user" placeholder="Search your username" required> <br>
    
    <!-- <label for="">Password:</label><br>
    <input type="password" name="password" placeholder="Enter your password" required> <br> -->
    <br>
    <input type="submit" name="confirm" value="confirm">
</form>
    
</body>
</html>


<?php
    include("database.php");

    if (isset($_POST["confirm"])) {
        try {
            $username = mysqli_real_escape_string($conn, $_POST["user"]);
            $sql = "SELECT * FROM employee_account WHERE user = '$username'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);

                echo "<h1>Employee Account:</h1>";

                echo "<h3>ID: " . $row["id"] . "</h3>";
                echo "<h3>USERNAME: " . $row["user"] . "</h3>";
                echo "<h3>PASSWORD: " . $row["password"] . "</h3><br>";
            } else {
                echo "No user found!";
            }

            mysqli_close($conn);

        } catch (mysqli_sql_exception $e) {
            echo "Failed to search!<br>";
        }
    }
?>
