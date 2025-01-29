<html lan="en">
    <head>
        <title>Simple Calculator</title>
    </head>
    <body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];

            if ($operation == "plus") {
            $result = $num1 + $num2;
            } elseif ($operation == "minus") {
            $result = $num1 - $num2;
            } elseif ($operation == "multiply") {
            $result = $num1 * $num2;
            } elseif ($operation == "divide") {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero";
            }
            } elseif ($operation == "percent") {
                $result = ($num1 / 100) * $num2;
            }

            echo "Result: " . $result;
        }
    ?>
    <form method="POST">
        <input name="operation" value="" hidden id="operation"/>
        <input name="num1" value='' type="number" />
        <input name="num2" value='' type="number" />
        <button type="submit">Calculate</button>
    </form>
    <div>
        <button onclick="operation('plus')" type="button">+</button>
        <button onclick="operation('minus')" type="button">-</button>
        <button onclick="operation('multiply')" type="button">x</button>
    </div>
        <h1>Project 2: Display User's Name</h1>

        <p>In this project, you'll use PHP variables and the echo statement to display dynamic content based on user input.</p>

        <b>Steps:</b>
        <ul>
            <li>Create a form with POST method where users can enter their name.</li>
            <li>Create a PHP code to handle the form submission.</li>
            <li>Show the user's input (the name) on the page.
        </ul>

        <script>
            function operation(type) {
                console.log(type)
                // .val = operation;
                const op = document.getElementById("operation");
                op.value = type;
            }
        </script>
    </body>
</html>