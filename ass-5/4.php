<?php

// Define the Emp class
class Emp {
    // Properties
    private $eno;
    private $ename;
    private $edesignation;
    private $esalary;
    private $projects = array(); // Collection of projects the employee works on

    // Constructor
    public function __construct($eno, $ename, $edesignation, $esalary) {
        $this->eno = $eno;
        $this->ename = $ename;
        $this->edesignation = $edesignation;
        $this->esalary = $esalary;
    }

    // Method to add a project to the employee's collection
    public function addProject($project, $no_of_hrs_worked) {
        $this->projects[$project->getPname()] = $no_of_hrs_worked;
    }

    // Method to get projects and hours worked by the employee
    public function getProjects() {
        return $this->projects;
    }
}

// Define the Project class
class Project {
    // Properties
    private $pno;
    private $pname;
    private $pduration;
    private $pbudget;

    // Constructor
    public function __construct($pno, $pname, $pduration, $pbudget) {
        $this->pno = $pno;
        $this->pname = $pname;
        $this->pduration = $pduration;
        $this->pbudget = $pbudget;
    }

    // Getters
    public function getPno() {
        return $this->pno;
    }

    public function getPname() {
        return $this->pname;
    }

    public function getPduration() {
        return $this->pduration;
    }

    public function getPbudget() {
        return $this->pbudget;
    }
}

// Create some Emp objects
$emp1 = new Emp(1, "John Doe", "Manager", 5000);
$emp2 = new Emp(2, "Jane Smith", "Developer", 4000);
$emp3 = new Emp(3, "Michael Johnson", "Analyst", 4500);

// Create some Project objects
$project1 = new Project(1, "Project 1", "3 months", 10000);
$project2 = new Project(2, "Project 2", "6 months", 20000);
$project3 = new Project(3, "Project 3", "4 months", 15000);

// Assign projects to employees along with the number of hours worked
$emp1->addProject($project1, 50);
$emp1->addProject($project2, 60);
$emp2->addProject($project1, 70);
$emp2->addProject($project3, 80);
$emp3->addProject($project2, 90);
$emp3->addProject($project3, 100);

// Prompt user for project name
echo "Enter project name: ";
$projectName = readline();

// Find the project with the given name and display the employees working on it along with the hours worked
echo "Employees working on project $projectName and their hours worked:\n";
foreach ([$emp1, $emp2, $emp3] as $emp) {
    $projects = $emp->getProjects();
    foreach ($projects as $pname => $hours) {
        if ($pname === $projectName) {
            echo "Employee: " . $emp->getEname() . ", Hours Worked: $hours\n";
        }
    }
}

?>
