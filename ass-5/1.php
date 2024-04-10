<?php

// Define the Property class
class Property {
    // Properties
    private $pno;
    private $description;
    private $area;
    private $owner; // Reference to the owner object

    // Constructor
    public function __construct($pno, $description, $area, $owner) {
        $this->pno = $pno;
        $this->description = $description;
        $this->area = $area;
        $this->owner = $owner;
    }

    // Getters
    public function getPno() {
        return $this->pno;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getArea() {
        return $this->area;
    }

    public function getOwner() {
        return $this->owner;
    }
}

// Define the Owner class
class Owner {
    // Properties
    private $oname;
    private $address;
    private $phone;
    private $properties = array(); // Collection of properties owned by the owner

    // Constructor
    public function __construct($oname, $address, $phone) {
        $this->oname = $oname;
        $this->address = $address;
        $this->phone = $phone;
    }

    // Method to add a property to the owner's collection
    public function addProperty($property) {
        $this->properties[] = $property;
    }

    // Method to display all properties owned by the owner
    public function displayProperties() {
        echo "Properties owned by {$this->oname}:\n";
        foreach ($this->properties as $property) {
            echo "Property No: " . $property->getPno() . ", Description: " . $property->getDescription() . ", Area: " . $property->getArea() . "\n";
        }
    }
}

// Create some Property objects
$property1 = new Property(1, "House", 200, null);
$property2 = new Property(2, "Apartment", 150, null);
$property3 = new Property(3, "Villa", 300, null);

// Create some Owner objects
$owner1 = new Owner("John Doe", "123 Main St", "555-1234");
$owner2 = new Owner("Jane Smith", "456 Elm St", "555-5678");

// Assign properties to owners
$owner1->addProperty($property1);
$owner1->addProperty($property2);
$owner2->addProperty($property3);

// Prompt user for owner name
echo "Enter owner name: ";
$ownerName = readline();

// Find and display properties owned by the given owner
foreach ([$owner1, $owner2] as $owner) {
    if ($owner->getOname() === $ownerName) {
        $owner->displayProperties();
        break;
    }
}

?>
