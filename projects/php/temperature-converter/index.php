<html lang="en">
    <head>
        <title>Temperature converter</title>
        <link rel="stylesheet" href="../index.css">
    </head>
    <body>
        <?php
            function convertTemperature($temp, $from, $to) {
                if ($from == "celsius" && $to == "fahrenheit") {
                    return $temp * 9/5 + 32;
                } elseif ($from == "fahrenheit" && $to == "celsius") {
                    return ($temp - 32) * 5/9;
                } else {
                    return $temp; // No conversion needed if units are the same
                }
            }        
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $temperature = $_POST['temperature'];
                $unit_from = $_POST['unit_from'];
                $unit_to = $_POST['unit_to'];
                $converted_temp = convertTemperature($temperature, $unit_from, $unit_to);
                echo "<div class='container'><p>Converted Temperature: $converted_temp $unit_to</p></div>";
            }
        ?>
        <div class="container">
            <form action="" method="POST">
                Enter temperature: <input type="number" name="temperature" required>
                Convert from: 
                <select name="unit_from">
                    <option value="celsius">Celsius</option>
                    <option value="fahrenheit">Fahrenheit</option>
                </select><br>
                Convert to: 
                <select name="unit_to">
                    <option value="celsius">Celsius</option>
                    <option value="fahrenheit">Fahrenheit</option>
                </select><br>
                <input type="submit" value="Convert">
            </form>
        </div>
    </body>
</html>