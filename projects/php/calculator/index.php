<?php
    // require_once "calculator.php";
    require_once(dirname(__FILE__) ."/calculator.php");
    $calculator = new Calculator();
    // $calculator = include "calculator2.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
    echo "Addtion: ". $calculator -> add($num1,$num2) . "<br>";
    }
?>
<form action="" method="POST">
    First number: <input type="number" name="num1"><br>
    Second number: <input type="number" name="num2"><br>
    Operation: 
    <select name="operation">
        <option value="add">Add</option>
        <option value="subtract">Subtract</option>
        <option value="multiply">Multiply</option>
        <option value="divide">Divide</option>
        <option value="percent">Percent</option>
    </select><br>
    <input type="submit" value="Calculate">
</form>