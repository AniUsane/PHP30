<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="number" name="operand1">
        <input type="text" name="operator">
        <input type="number" name="operand2">
        <input type="submit" name="calculate">
    </form>
</body>
</html>
<!-- ფორმა 3 ინფუთით, რომელიც ითვლის რიცხვებს -->
<?php
    $operand1 = $_POST["operand1"];
    $operand2 = $_POST["operand2"];
    $operator = $_POST["operator"];

    if($operator== "+") {
        echo $operand1 + $operand2;
    }
    elseif($operator== "-"){
        echo $operand1 - $operand2;
    }
    elseif($operator== "*"){
        echo $operand1 * $operand2;
    }
    elseif($operator== "/"){
        echo $operand1 / $operand2;
    }
    else{
        echo "Please write the correct operator";
    }
?>
