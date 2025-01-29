<html lan="en">
    <head>
        <title>Students Grade</title>
        <link rel="stylesheet" href="../index.css">
      </head>
    <body>

        <?php
              $students = [
                "John" => "A",
                "Jane" => "B",
                "Sam" => "C",
                "Alice" => "A"
              ];
              
              echo "<table border='1'>
              <tr>
                <th>Name</th>
                <th>Grade</th>
              </tr>";
    
      foreach ($students as $name => $grade) {
        echo "<tr>
                <td>$name</td>
                <td>$grade</td>
              </tr>";
      }
    
      echo "</table>";              
        ?>

    </body>
</html>