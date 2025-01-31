<html lan="en">

<head>
    <title>Secure Login</title>
    <link rel="stylesheet" href="../../index.css">
</head>

<body>
    <div class="container">
        <?php
        // Parent class
        class Vehicle
        {
            public $color;

            public function __construct($color)
            {
                $this->color = $color;
            }

            public function displayColor()
            {
                echo "This vehicle is " . $this->color . "<br>";
            }
        }

        // Child class
        class Car extends Vehicle
        {
            public $make;
            public $model;

            public function __construct($color, $make, $model = 'Unknown')
            {
                parent::__construct($color); // Call parent constructor
                $this->make = $make;
                $this->model = $model;
            }

            // Method overriding
            public function displayInfo()
            {
                echo "Car: " . $this->make . " " . $this->model . " - Color: " . $this->color . "<br>";
            }
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $color = $_POST['color'];
            $make = $_POST['make'];
            $model = $_POST['model'];

            // Instantiate a Car object
            $myCar = new Car($color, $make, $model);
            $myCar->displayColor(); // From parent class
            $myCar->displayInfo(); // Overridden method from child class
        }
        ?>

        <form method="POST">
            <input name="color" type="text" placeholder="Color">
            <input name="make" type="text" placeholder="Make">
            <input name="model" type="text" placeholder="Model">
            <button type="submit">Create Car</button>
        </form>
    </div>
</body>

</html>