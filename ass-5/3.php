<?php

// Define the Emp class
class Emp {
    // Properties
    private $eno;
    private $ename;
    private $edesignation;
    private $esalary;
    private $dept; // Reference to the department object

    // Constructor
    public function __construct($eno, $ename, $edesignation, $esalary, $dept) {
        $this->eno = $eno;
        $this->ename = $ename;
        $this->edesignation = $edesignation;
        $this->esalary = $esalary;
        $this->dept = $dept;
    }

    // Getters
    public function getEno() {
        return $this->eno;
    }

    public function getEname() {
        return $this->ename;
    }

    public function getEdesignation() {
        return $this->edesignation;
    }

    public function getEsalary() {
        return $this->esalary;
    }

    public function getDept() {
        return $this->dept;
    }
}

// Define the Dept class
class Dept {
    // Properties
    private $dno;
    private $dname;
    private $dlocation;
    private $employees = array(); // Collection of employees in the department

    // Constructor
    public function __construct($dno, $dname, $dlocation) {
        $this->dno = $dno;
        $this->dname = $dname;
        $this->dlocation = $dlocation;
    }

    // Method to add an employee to the department's collection
    public function addEmployee($employee) {
        $this->employees[] = $employee;
    }

    // Method to count the number of employees in the department
    public function countEmployees() {
        return count($this->employees);
    }
}

// Create some Emp objects
$emp1 = new Emp(1, "John Doe", "Manager", 5000, null);
$emp2 = new Emp(2, "Jane Smith", "Developer", 4000, null);
$emp3 = new Emp(3, "Michael Johnson", "Analyst", 4500, null);

// Create some Dept objects
$dept1 = new Dept(1, "HR", "Location 1");
$dept2 = new Dept(2, "Finance", "Location 2");

// Assign employees to departments
$dept1->addEmployee($emp1);
$dept1->addEmployee($emp2);
$dept2->addEmployee($emp3);

// Prompt user for department name
echo "Enter department name: ";
$deptName = readline();

// Find the department with the given name and display the count of employees
foreach ([$dept1, $dept2] as $dept) {
    if ($dept->getDname() === $deptName) {
        echo "Number of employees in department $deptName: " . $dept->countEmployees() . "\n";
        break;
    }
}

?>
