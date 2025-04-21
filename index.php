<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">

    <label>Age:</label><br>
    <input type="text" name="age" placeholder="Enter your age"><br>
    
    <button type="submit">SUBMIT</button>
    
    </form>

</body>
</html>

<?php

    $age = $_POST['age'];

    if($age < 18) {
        echo "You're an underage";
    }elseif($age >= 18 && $age < 60) {
        echo "You're an adult";
    }else{
        echo "You're a senior citizen";
    }


?>