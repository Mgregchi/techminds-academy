<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Login System</title>
    <link rel="stylesheet" href="../index.css">
</head>
    <body>
        <?php
            session_start();

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $_SESSION['username'] = $_POST['username'];
                echo "Welcome, " . $_COOKIE['username'] . "!";
            }
        ?>
        <div class="container">
            <form method="POST">
                <label>Enter username</label>
                <input value="" placeholder="Username" name="username"/>
                <button type="submit">Login</button>
            </form>
        </div>
    </body>
</html>