<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">

    <label>DAY:</label><br>
    <input type="text" name="day" placeholder="Enter Day"><br>
    
    <button type="submit">SUBMIT</button>
    
    </form>

</body>
</html>

<?php

    $days = $_POST['day'];

    while($i < 5){
        echo "<br>Day: $days <br>";
        $i++;
    }


?>