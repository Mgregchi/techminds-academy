<html lan="en">

<head>
    <title>Photo Album</title>
    <link rel="stylesheet" href="../../index.css">
</head>

<body>
    <div class="container">
        <!-- api_consume.php -->
        <?php
        $url = "https://jsonplaceholder.typicode.com/photos"; // Example API
        $response = file_get_contents($url);
        $data = json_decode($response, true); // Decode JSON to array
        
        echo '<div class="row">';
        foreach ($data as $item) {
            echo '<div class="card" style="width: 18rem; margin: 10px;">';
            echo '<img src="' . $item['thumbnailUrl'] . '" class="card-img-top" alt="...">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $item['title'] . '</h5>';
            // echo '<p class="card-text">' . $item['body'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        ?>
    </div>
</body>

</html>