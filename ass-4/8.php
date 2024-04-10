<?php

// Define the interface for handling properties
interface PropertyInterface {
    public function setProperty($value);
    public function getProperty();
}

// Define the interface for home-related properties
interface HomeInterface {
    public function setHasGarden($bool);
    public function getHasGarden();
}

// Implement the interfaces in the Bunglow class
class Bunglow implements PropertyInterface, HomeInterface {
    // Properties
    private $property;
    private $hasGarden;

    // Method to set property
    public function setProperty($value) {
        $this->property = $value;
    }

    // Method to get property
    public function getProperty() {
        return $this->property;
    }

    // Method to set whether the bunglow has a garden
    public function setHasGarden($bool) {
        $this->hasGarden = (bool)$bool;
    }

    // Method to check if the bunglow has a garden
    public function getHasGarden() {
        return $this->hasGarden;
    }
}

// Create an instance of the Bunglow class
$bunglow = new Bunglow();

// Set and get property
$bunglow->setProperty("Luxurious");
echo "Property: " . $bunglow->getProperty() . "\n";

// Set and get whether the bunglow has a garden
$bunglow->setHasGarden(true);
echo "Has Garden: " . ($bunglow->getHasGarden() ? "Yes" : "No") . "\n";

?>
