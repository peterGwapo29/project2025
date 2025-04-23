<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">

    <label>Grade:</label><br>
    <input type="text" name="flp" placeholder="Enter number to loop"><br>
    
    <button type="submit">SUBMIT</button>
    
    </form>

</body>
</html>

<?php

    $loop = $_POST['flp'];
    $display = null;

    for($i = 0; $i < 5; $i++){
        for($j = $i; $j < 5; $j++){
            echo $i . " ";
        }
        echo "<br>";
    }


?>