<html lan="en">
    <head>
        <title>Simple Voting System</title>
        <link rel="stylesheet" href="../index.css">
    </head>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "The email address '$email' is valid!";
                } else {
                    echo "The email address '$email' is not valid.";
                }
            }
        ?>
        <div class="container">
            <form action="validate_email.php" method="POST">
                <label>Enter your email: </label>
                <input type="text" name="email">
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>
