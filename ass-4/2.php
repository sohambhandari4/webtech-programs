<?php

// Define the Shape class
class Shape {
    // Empty constructor
    public function __construct() {
    }
    
    // Method to calculate area (to be overridden by subclasses)
    public function calculateArea() {
        return 0;
    }
}

// Define the Triangle class which inherits from Shape
class Triangle extends Shape {
    // Properties
    private $base;
    private $height;
    
    // Constructor
    public function __construct($base, $height) {
        parent::__construct();
        $this->base = $base;
        $this->height = $height;
    }
    
    // Override calculateArea method
    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

// Define the Square class which inherits from Shape
class Square extends Shape {
    // Property
    private $side;
    
    // Constructor
    public function __construct($side) {
        parent::__construct();
        $this->side = $side;
    }
    
    // Override calculateArea method
    public function calculateArea() {
        return $this->side * $this->side;
    }
}

// Define the Rectangle class which inherits from Shape
class Rectangle extends Shape {
    // Properties
    private $length;
    private $width;
    
    // Constructor
    public function __construct($length, $width) {
        parent::__construct();
        $this->length = $length;
        $this->width = $width;
    }
    
    // Override calculateArea method
    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Define the Circle class which inherits from Shape
class Circle extends Shape {
    // Property
    private $radius;
    
    // Constructor
    public function __construct($radius) {
        parent::__construct();
        $this->radius = $radius;
    }
    
    // Override calculateArea method
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// HTML form for selecting a shape
echo "<form method='post'>";
echo "<h3>Select a shape:</h3>";
echo "<input type='radio' name='shape' value='triangle'>Triangle<br>";
echo "<input type='radio' name='shape' value='square'>Square<br>";
echo "<input type='radio' name='shape' value='rectangle'>Rectangle<br>";
echo "<input type='radio' name='shape' value='circle'>Circle<br>";
echo "<input type='submit' value='Submit'>";
echo "</form>";

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedShape = $_POST["shape"];
    
    // Create an instance of the selected shape and calculate its area
    switch ($selectedShape) {
        case "triangle":
            $triangle = new Triangle(5, 7);
            echo "Area of Triangle: " . $triangle->calculateArea();
            break;
        case "square":
            $square = new Square(4);
            echo "Area of Square: " . $square->calculateArea();
            break;
        case "rectangle":
            $rectangle = new Rectangle(6, 8);
            echo "Area of Rectangle: " . $rectangle->calculateArea();
            break;
        case "circle":
            $circle = new Circle(3);
            echo "Area of Circle: " . $circle->calculateArea();
            break;
        default:
            echo "Please select a valid shape.";
            break;
    }
}

?>
