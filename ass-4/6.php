<?php

// Define the Employee class
class Employee {
    // Private members
    private $id;
    private $name;
    private $department;
    private $salary;

    // Constructor
    public function __construct($id, $name, $department, $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDepartment() {
        return $this->department;
    }

    public function getSalary() {
        return $this->salary;
    }
}

// Define the Manager class which inherits from Employee
class Manager extends Employee {
    // Private member
    private $bonus;

    // Constructor
    public function __construct($id, $name, $department, $salary, $bonus) {
        parent::__construct($id, $name, $department, $salary);
        $this->bonus = $bonus;
    }

    // Getter for bonus
    public function getBonus() {
        return $this->bonus;
    }

    // Method to calculate total salary (salary + bonus)
    public function getTotalSalary() {
        return $this->getSalary() + $this->bonus;
    }
}

// Create 6 Manager objects
$managers = array(
    new Manager(1, 'John Doe', 'Sales', 5000, 1000),
    new Manager(2, 'Alice Smith', 'HR', 6000, 1200),
    new Manager(3, 'Bob Johnson', 'Finance', 5500, 1100),
    new Manager(4, 'Jane Williams', 'Marketing', 4800, 900),
    new Manager(5, 'Michael Brown', 'IT', 6500, 1300),
    new Manager(6, 'Emma Davis', 'Operations', 5200, 1000)
);

// Find the manager with maximum total salary
$maxTotalSalary = 0;
$maxSalaryManager = null;

foreach ($managers as $manager) {
    if ($manager->getTotalSalary() > $maxTotalSalary) {
        $maxTotalSalary = $manager->getTotalSalary();
        $maxSalaryManager = $manager;
    }
}

// Display details of the manager with maximum total salary
if ($maxSalaryManager) {
    echo "Manager with maximum total salary:\n";
    echo "ID: " . $maxSalaryManager->getId() . "\n";
    echo "Name: " . $maxSalaryManager->getName() . "\n";
    echo "Department: " . $maxSalaryManager->getDepartment() . "\n";
    echo "Salary: " . $maxSalaryManager->getSalary() . "\n";
    echo "Bonus: " . $maxSalaryManager->getBonus() . "\n";
    echo "Total Salary: " . $maxSalaryManager->getTotalSalary() . "\n";
} else {
    echo "No manager found.\n";
}

?>
