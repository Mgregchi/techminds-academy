<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Login System</title>
    <link rel="stylesheet" href="../index.css">
</head>

<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo "Please log in first. <br><a href='index.php'>Go to login</a>";
    exit;
}

echo "Welcome back, " . "<br>" . $_SESSION['username'];
?>

<div class="container">
    <form method="POST" action="logout.php">
        <button type="submit">Logout</button>
    </form>
</div>
</body>

</html>