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
    <input type="text" name="grade" placeholder="Enter your grade"><br>
    
    <button type="submit">SUBMIT</button>
    
    </form>

</body>
</html>

<?php

    $grade = $_POST['grade'];

    // if($age < 18) {
    //     echo "You're an underage";
    // }elseif($age >= 18 && $age < 60) {
    //     echo "You're an adult";
    // }else{
    //     echo "You're a senior citizen";
    // }

    echo "<br>";
    echo "<br>";

    // switch statement

    switch($grade) {
        case "A":
            echo "Excellent";
            break;
        case "B":
            echo "Good";
            break;
        case "C":
            echo "Average";
            break;
        case "D":
            echo "Passing";
            break;
        case "F":
            echo "Retake";
            break;
        default:
            echo "Invalid grade";
            break;
    }

?>