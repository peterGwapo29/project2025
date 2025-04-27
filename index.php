<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form action="index.php" method="post">
    <input type="radio" name="credit_card" value="Visa1">Visa1
        <br>
        <input type="radio" name="credit_card" value="Visa2">Visa2
        <br>
        <input type="radio" name="credit_card" value="Visa3">Visa3
        <br>
        <input type="submit" name="confirm" value="confirm">
   </form>

</body>
</html>

<?php
    $selected_card = null;

    if(isset($_POST["confirm"])) {
        if(isset($_POST["credit_card"])){
            $selected_card = $_POST['credit_card'];
        }
        switch ($selected_card) {
            case 'Visa1':
                echo "You selected Visa1";
                break;
            case 'Visa2':
                echo "You selected Visa2";
                break;
            case 'Visa3':
                echo "You selected Visa3";
                break;
            default:
                echo "No card selected";
        }
    }

?>