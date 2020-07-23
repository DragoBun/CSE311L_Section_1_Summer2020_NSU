<?php

$link = mysqli_connect('localhost','root','','CSE311_Homework');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}


$sql = "CREATE TABLE employee(
    Employee_id INT(6) NOT NULL PRIMARY KEY,
    First_Name VARCHAR(50),
    Last_Name VARCHAR(25) NOT NULL,
    Email VARCHAR(25) NOT NULL,
    Phone_Number VARCHAR(15),
    Hire_Date DATE NOT NULL,
    Job_id VARCHAR(10) NOT NULL,
    Salary INT(8),
    Commision_pct INT(2),
    Manager_id INT(6),
    Department_id INT(4)
    )";

if(mysqli_query($link, $sql)){
    echo "Table Created";
}
else{
    echo "Error: Could not create Table\t" .mysqli_error($link);
}

mysqli_close($link);

?>