<?php

// Define interface Shape
interface Shape {
    public function area();
    public function volume();
}

// Define class Cylinder implementing the Shape interface
class Cylinder implements Shape {
    // Define constant PI
    const PI = 3.14159;
    
    // Properties of the cylinder
    private $radius;
    private $height;
    
    // Constructor to initialize the cylinder with radius and height
    public function __construct($radius, $height) {
        $this->radius = $radius;
        $this->height = $height;
    }
    
    // Calculate the surface area of the cylinder
    public function area() {
        return 2 * self::PI * $this->radius * ($this->radius + $this->height);
    }
    
    // Calculate the volume of the cylinder
    public function volume() {
        return self::PI * $this->radius * $this->radius * $this->height;
    }
}

// Create an instance of Cylinder
$cylinder = new Cylinder(5, 10);

// Calculate and display the area and volume of the cylinder
echo "Surface Area of the Cylinder: " . $cylinder->area() . "\n";
echo "Volume of the Cylinder: " . $cylinder->volume() . "\n";

?>
