<html lan="en">
    <head>
        <title>Simple Voting System</title>
    </head>
    <body>
        <style>
            form {
                display: flex;
                flex-direction: column;
                width: 400px;
            }
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: start;
            }
            button, input {
                margin-block: 5px;
            }

        </style>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $age = $_POST['age'];
                $nationality = $_POST['nationality'];

                if ($age >= 18) {
                    // Check the nationality
                    if ($nationality == 'NIGERIA') {
                        echo "You are eligible to vote!";
                    } else {
                        echo "You are not eligible to vote!. You are not from Nigeria!";
                    }

                } else {
                    echo "You are not eligible to vote!";
                    // Because your age is less than the legal voting age
                }
            }
        ?>
        <div class="container">
            <form method="POST">
                <label>Enter your age</label>
                <input name="age" type="number" required placeholder="Enter legal age" />
                <select required name="nationality">
                    <option value="">Select country</option>
                    <option value="USA">USA</option>
                    <option value="GHANA">GHANA</option>
                    <option value="NIGERIA">NIGERIA</option>
                </select>
                <button type="submit">Check eligibility</button>
            </form>
        </div>
    </body>
</html>