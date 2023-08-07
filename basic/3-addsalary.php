<?php
class Employee {

    public float $salary;
    public $designation;
    public $joinDate;

    public function __construct( float $salary, string $joinDate, string $designation) {
        $this->salary = $salary ;
        $this->joinDate = $joinDate ;
        $this->designation = $designation ;
    }
    public function getEmployeeSalary () {
        return $this;
    }
    public function addSalary($adjustment) {
        return $this->salary += $adjustment;
    }
}

$emp = new Employee('30000.00', '01/01/2023', 'Senior Software Engineer');

echo "<pre>";
print_r($emp->addSalary(10000.00));
echo "</pre>";


// 40000

?>