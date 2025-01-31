<html lan="en">
    <head>
        <title>User Management System</title>
        <link rel="stylesheet" href="../index.css">
    </head>
    <body>
        <div class="container">
            <?php
                include "../../connect.php";
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
              
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    echo "Name: " . $row['name'] . " - Email: " . $row['email'] . "<br>";
                  }
                } else {
                  echo "0 results";
                }

                $conn->close();
            ?>
        </div>
    </body>
</html>
