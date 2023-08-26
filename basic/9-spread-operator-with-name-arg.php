<?php

function showEmployeeInfo($name, $designation, $department) {
    return "Name: ". $name  . " <br/> Designation : ". $designation . " <br/> Department: " .$department ;
}

$employee = [
    'name' => 'Muhammad Sujan Prodhan',
    'designation' => 'Lead Software Engineer',
    'department' => 'Software Development'
];
$result = showEmployeeInfo(...$employee);

echo "<pre>";
print_r($result);
echo "</pre>";

// Spread Operator with Named Arguments:

// Name: Muhammad Sujan Prodhan
// Designation : Lead Software Engineer 
// Department: Software Development

?>