<html lan="en">
    <head>
        <title>User Management System</title>
        <link rel="stylesheet" href="../index.css">
    </head>
    <body>
        <div class="container">
            <?php
                include "connect.php";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = $_POST['name'];
                    $email = $_POST['email'];

                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
        
                        if ($conn->query($sql) === TRUE) {
                        echo "<p>New user added successfully!</p>";
                        } else {
                        echo "<p>Error: " . $sql . "<br></p>" . $conn->error;
                        }
                    } else {
                        echo "The email address '$email' is not valid.";
                    }
                }
            ?>
        </div>
        <div class="container">
            <form action="" method="POST">
                <label>Enter name</label>
                <input type="text" name="name" required>
                <label>Enter email</label>
                <input type="email" name="email" required>
                <input type="submit" value="Add user">
            </form>
        </div>
    </body>
</html>
