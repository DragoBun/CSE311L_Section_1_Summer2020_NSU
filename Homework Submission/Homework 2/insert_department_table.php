<?php

$link = mysqli_connect('localhost','root','','CSE311_Homework');

if($link == false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "INSERT INTO department(Department_id,Department_Name,Manager_id,Location_id) 
    VALUES
    (10,'Administration',200,1700),
    (20,'Marketing',201,1800),
    (50,'Shipping',124,1500),
    (60,'IT',103,1400),
    (80,'Sales',149,2500),
    (90,'Executive',100,1700),
    (110,'Accounting',205,1700),
    (190,'Contracting',NULL,1700)";

if(mysqli_query($link, $sql)){
    echo "VALUES INSERTED";
}
else{
    echo "Error: Could not create Table\t" .mysqli_error($link);
}

mysqli_close($link);

?>