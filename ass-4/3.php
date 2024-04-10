<?php

// Define the Teacher class
class Teacher {
    // Properties
    protected $code;
    protected $name;
    protected $qualification;

    // Constructor
    public function __construct($code, $name, $qualification) {
        $this->code = $code;
        $this->name = $name;
        $this->qualification = $qualification;
    }

    // Getter methods
    public function getCode() {
        return $this->code;
    }

    public function getName() {
        return $this->name;
    }

    public function getQualification() {
        return $this->qualification;
    }
}

// Define the Account class
class Account extends Teacher {
    // Properties
    protected $accountNo;
    protected $joiningDate;

    // Constructor
    public function __construct($code, $name, $qualification, $accountNo, $joiningDate) {
        parent::__construct($code, $name, $qualification);
        $this->accountNo = $accountNo;
        $this->joiningDate = $joiningDate;
    }

    // Getter methods
    public function getAccountNo() {
        return $this->accountNo;
    }

    public function getJoiningDate() {
        return $this->joiningDate;
    }
}

// Define the Salary class
class Salary extends Account {
    // Properties
    protected $basicPay;
    protected $earnings;
    protected $deduction;

    // Constructor
    public function __construct($code, $name, $qualification, $accountNo, $joiningDate, $basicPay, $earnings, $deduction) {
        parent::__construct($code, $name, $qualification, $accountNo, $joiningDate);
        $this->basicPay = $basicPay;
        $this->earnings = $earnings;
        $this->deduction = $deduction;
    }

    // Method to calculate salary
    public function calculateSalary() {
        return $this->basicPay + $this->earnings - $this->deduction;
    }

    // Method to display salary details
    public function displaySalary() {
        echo "Teacher: {$this->getName()}, Account No: {$this->getAccountNo()}, Salary: {$this->calculateSalary()}\n";
    }
}

// Function to sort teachers by name
function sortByName($a, $b) {
    return strcmp($a->getName(), $b->getName());
}

// Sample data
$teachers = array(
    new Salary('T001', 'John Doe', 'M.Sc', 'A001', '2022-01-01', 5000, 1000, 500),
    new Salary('T002', 'Alice Smith', 'Ph.D', 'A002', '2022-02-01', 6000, 1200, 600),
    new Salary('T003', 'Bob Johnson', 'B.Ed', 'A003', '2022-03-01', 5500, 1100, 550)
);

// Menu-driven program
while (true) {
    echo "\nMenu:\n";
    echo "a) Build Master Table\n";
    echo "b) Sort all entries\n";
    echo "c) Search an entry\n";
    echo "d) Display salary of all teachers\n";
    echo "e) Exit\n";
    echo "Enter your choice: ";

    // Get user input
    $choice = readline();

    switch ($choice) {
        case 'a':
            echo "Master Table:\n";
            foreach ($teachers as $teacher) {
                echo "Code: {$teacher->getCode()}, Name: {$teacher->getName()}, Qualification: {$teacher->getQualification()}, Account No: {$teacher->getAccountNo()}, Joining Date: {$teacher->getJoiningDate()}\n";
            }
            break;
        case 'b':
            usort($teachers, 'sortByName');
            echo "Entries sorted by name.\n";
            break;
        case 'c':
            echo "Enter teacher name to search: ";
            $searchName = readline();
            $found = false;
            foreach ($teachers as $teacher) {
                if (strtolower($teacher->getName()) === strtolower($searchName)) {
                    echo "Teacher found: Code: {$teacher->getCode()}, Name: {$teacher->getName()}, Qualification: {$teacher->getQualification()}, Account No: {$teacher->getAccountNo()}, Joining Date: {$teacher->getJoiningDate()}\n";
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                echo "Teacher not found.\n";
            }
            break;
        case 'd':
            echo "Salary details:\n";
            foreach ($teachers as $teacher) {
                $teacher->displaySalary();
            }
            break;
        case 'e':
            echo "Exiting program.\n";
            exit();
        default:
            echo "Invalid choice. Please enter a valid option.\n";
            break;
    }
}

?>
