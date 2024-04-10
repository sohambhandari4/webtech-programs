<?php

// Define a sample class
class MyClass {
    public $publicProperty = 'Public property';
    protected $protectedProperty = 'Protected property';
    private $privateProperty = 'Private property';
    
    public function publicMethod() {
        return 'Public method';
    }
    
    protected function protectedMethod() {
        return 'Protected method';
    }
    
    private function privateMethod() {
        return 'Private method';
    }
}

// Create an instance of the class
$obj = new MyClass();

// Get the class name
echo "Class name: " . get_class($obj) . "\n";

// Get an array of all public properties of the object
$publicProperties = get_object_vars($obj);
echo "Public properties:\n";
print_r($publicProperties);

// Get an array of all methods of the object
$methods = get_class_methods($obj);
echo "Methods:\n";
print_r($methods);

// Check if a property or method exists
echo "Does property 'publicProperty' exist? " . (property_exists($obj, 'publicProperty') ? "Yes\n" : "No\n");
echo "Does method 'publicMethod' exist? " . (method_exists($obj, 'publicMethod') ? "Yes\n" : "No\n");

// Accessing properties and calling methods
echo "Value of publicProperty: " . $obj->publicProperty . "\n";
echo "Result of calling publicMethod: " . $obj->publicMethod() . "\n";

?>
