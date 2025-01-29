<html lan="en">
    <head>
        <title>Simple Voting System</title>
        <link rel="stylesheet" href="../index.css">
    </head>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $content = $_POST['content'];
                $extension = $_POST['extension'];
                $filename = $_POST['filename'] . $extension;

                // Write to a file
                file_put_contents($filename, $content);

                // Read from the file and display contents
                echo "<h3>Contents of the file:</h3>";
                echo nl2br(file_get_contents($filename));
            }
        ?>
        <div class="container">
            <form action="" method="POST">
                <label>Enter some text:</label>
                <textarea name="content"></textarea><br>
                <div class="row">
                    <div class="col w-100">
                        <label>Enter filename</label>
                        <div class="row">
                            <input class="w-100" name="filename" placeholder="e.g, note" value="note"/>
                            <select name="extension">
                                <option value=".txt">txt</option>
                                <option value=".js">js</option>
                                <option value=".php">php</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </body>
</html>
