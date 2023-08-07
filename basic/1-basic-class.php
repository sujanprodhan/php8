<?php
class Employee {
    public float $salary;
    public $joinDate;
    public $designation;
}

$emp = new Employee;
$emp->salary = 2342;
$emp->joinDate ='01/01/2011';
$emp->designation ='Engineer';
echo "<pre>";
print_r($emp);
echo "</pre>";


// Employee Object
// (
//     [salary] => 2342
//     [joinDate] => 01/01/2011
//     [designation] => Engineer
// )

?>