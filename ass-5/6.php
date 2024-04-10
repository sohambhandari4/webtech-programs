<?php

// Define the Doctor class
class Doctor {
    // Properties
    private $doc_no;
    private $doc_name;
    private $experience;
    private $city;
    private $area;
    private $hospitals = array(); // Collection of hospitals associated with the doctor

    // Constructor
    public function __construct($doc_no, $doc_name, $experience, $city, $area) {
        $this->doc_no = $doc_no;
        $this->doc_name = $doc_name;
        $this->experience = $experience;
        $this->city = $city;
        $this->area = $area;
    }

    // Method to add a hospital to the doctor's collection
    public function addHospital($hospital, $type_of_appointment) {
        $this->hospitals[$hospital->getHosp_name()] = $type_of_appointment;
    }

    // Method to get the doctor's experience
    public function getExperience() {
        return $this->experience;
    }

    // Method to set the city of the doctor
    public function setCity($city) {
        $this->city = $city;
    }

    // Method to get the city of the doctor
    public function getCity() {
        return $this->city;
    }
}

// Define the Hospital class
class Hospital {
    // Properties
    private $hosp_no;
    private $hosp_name;
    private $hosp_city;

    // Constructor
    public function __construct($hosp_no, $hosp_name, $hosp_city) {
        $this->hosp_no = $hosp_no;
        $this->hosp_name = $hosp_name;
        $this->hosp_city = $hosp_city;
    }

    // Method to get the hospital name
    public function getHosp_name() {
        return $this->hosp_name;
    }
}

// Create some Doctor objects
$doctor1 = new Doctor(1, "Dr. John", 5, "Pune", "Area 1");
$doctor2 = new Doctor(2, "Dr. Jane", 3, "Mumbai", "Area 2");
$doctor3 = new Doctor(3, "Dr. Michael", 2, "Pune", "Area 3");

// Create some Hospital objects
$hospital1 = new Hospital(1, "Hospital 1", "Pune");
$hospital2 = new Hospital(2, "Hospital 2", "Mumbai");
$hospital3 = new Hospital(3, "Hospital 3", "Pune");

// Assign hospitals to doctors along with the type of appointment
$doctor1->addHospital($hospital1, "visiting");
$doctor1->addHospital($hospital2, "working");
$doctor2->addHospital($hospital2, "visiting");
$doctor3->addHospital($hospital3, "working");

// Prompt user for experience value
echo "Enter experience value: ";
$experienceValue = readline();

// Update city to Mumbai for doctors with experience less than entered value
foreach ([$doctor1, $doctor2, $doctor3] as $doctor) {
    if ($doctor->getExperience() < $experienceValue) {
        $doctor->setCity("Mumbai");
    }
}

// Display updated city for all doctors
echo "Updated cities for doctors:\n";
foreach ([$doctor1, $doctor2, $doctor3] as $doctor) {
    echo "Doctor: " . $doctor->getDoc_name() . ", City: " . $doctor->getCity() . "\n";
}

?>
