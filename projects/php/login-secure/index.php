<html lan="en">

<head>
    <title>Secure Login</title>
    <link rel="stylesheet" href="../index.css">
</head>

<body>
    <div class="container">
        <?php
        include '../connect.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Using prepared statements to prevent SQL injection
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
            $stmt->bind_param("ss", $username, $password);
            $stmt->execute();

            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "Login successful!";
            } else {
                echo "Invalid username or password.";
            }

            $stmt->close();
        }
        ?>

        <form method="POST">
            <label>Username</label>
            <input type="text" name="username"><br>
            <label>Password</label>
            <input type="password" name="password"><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>