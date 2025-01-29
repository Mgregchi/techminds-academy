<!-- calculator/legacy/index.php -->

<?php
    require_once(dirname(__FILE__) ."/calculator.php");
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