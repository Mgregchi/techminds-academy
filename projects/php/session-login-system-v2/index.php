<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Login System V2</title>
    <link rel="stylesheet" href="../index.css">
</head>

<body>
    <!-- login_process.php -->
    <?php
    session_start();

    // Example hardcoded credentials
    $correct_username = "admin";
    $correct_password = "1234";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === $correct_username && $password === $correct_password) {
            $_SESSION['username'] = $username;
            $_SESSION['loggedin'] = true;
            echo "You are logged in! <br><a href='profile.php'>Go to profile</a>";
        } else {
            echo "Invalid credentials.";
        }
    }
    ?>
    <div class="container">
        <form method="POST">
            <label>Enter username</label>
            <input value="" placeholder="Username" name="username" />
            <label>Enter password</label>
            <input type="password" name="password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>