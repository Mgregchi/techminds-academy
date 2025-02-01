<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        session_unset();
        session_destroy();
        echo "You are logged out. <br><a href='index.php'>Go to login</a>";
    } else {
        echo "You are not logged in. <br><a href='index.php'>Go to login</a>";
    }
    
} else {
    echo "Nothing to see here. <br><a href='index.php'>Go to login</a>";
}
?>