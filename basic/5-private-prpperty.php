<?php
class Employee {

    public float $salary;
    public $designation;
    private $joinDate;

    public function __construct( float $salary, string $joinDate, string $designation) {
        $this->salary = $salary ;
        $this->joinDate = $joinDate ;
        $this->designation = $designation ;
    }
    public function getEmployeeSalary () {
        return $this;
    }
    private function bonus ( int $bonus = 1000) {
        return $this->salary +=  2000 ;
    }
    public function addSalary($adjustment) {
        $this->bonus($adjustment / 2);
        return $this->salary += $adjustment;
    }
}

$emp = new Employee('20000.00', '01/01/2023', 'Senior Software Engineer');

echo "<pre>";
print_r($emp->addSalary(10000.00));
echo "</pre>";


// 32000

?>